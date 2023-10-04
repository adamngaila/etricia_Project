<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\powerpackPackage;
use App\PowerpackParameters;
use App\PowerpackControlls;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\PackDiagnosisLogs;
use App\LiveMonitering;
use App\Exports\DiagnosisExport;
use Maatwebsite\Excel\Facades\Excel;

class PowerpackController extends Controller
{
    public function index()
    {
         $code = Auth::user()->serverip;
        $diagnosis = PackDiagnosisLogs::where('packagecode',$code)->where( 'created_at', '>', Carbon::now()->subDays(45))->orderBy('id','DESC')->paginate(15);
         
       $Parameters = LiveMonitering::where('packagecode', $code)->latest()->first();

       $controlStatus = PowerpackControlls::where('packagecode', $code)->first();;

      $batery = powerpackPackage::where('packagecode', $code)->orderBy('id','desc')->limit(1)->pluck('ChargeLevel');



        return view('etricia.etricia',compact('diagnosis','Parameters','controlStatus','batery'));
    }

    public function DrawCharts(Request $request)
    {
        $code = Auth::user()->serverip;
        $result = PowerpackParameters::where('packagecode',$code) ->where( 'created_at', '>', Carbon::now()->subDays(45))->get();
        return json_encode($result);
        
    }

    public function FetchDescription(Request $request)
    {
    
        $result = \DB::table('powerpack_packages')
                            ->join('powerpack_parameters','powerpack_packages.packagecode','=','powerpack_parameters.packagecode')
                            ->join('etricia_directories','powerpack_packages.packagecode','=','etricia_directories.packagecode')
                            ->select('powerpack_packages.*','powerpack_parameters.*')
                            ->where('packagecode',$request->code)->get();                         
         return redirect('/etricia')->with('result',$result);
    }
    public function monitor_Parameters(){

    }

    public function control_pack (Request $request){
      if($request->command == 'Locked'){
        PowerpackControlls::where('packagecode',$request->code)->update([
            'Lock'=>'ON',
          
         ]);  
         }      
     elseif($request->command =='UnLocked'){
       PowerpackControlls::where('packagecode',$request->code)->update([
            'Lock'=>'OFF',
            
         ]); 
     }
     elseif($request->command =='Charge'){
       PowerpackControlls::where('packagecode',$request->code)->update([
             'relay_2'=>'ON',
         ]); 
     }
     elseif($request->command =='Uncharge'){
       PowerpackControlls::where('packagecode',$request->code)->update([
           'relay_2'=>'OFF',
         ]);
     }
     elseif($request->command == 'PowerOn'){
       PowerpackControlls::where('packagecode',$request->code)->update([
          'relay_1'=>'ON',
         ]);
     }
     elseif($request->command == 'PowerOff'){
       PowerpackControlls::where('packagecode',$request->code)->update([
            'relay_1'=>'OFF',
         ]); 
     }
      
     return redirect('/etricia_Monitor');


     }
    
    public function diagnosis_results(){
        $code = Auth::user()->serverip;
        $diagnosis = PackDiagnosisLogs::where('packagecode',$code)->where( 'created_at', '>', Carbon::now()->subDays(40))->paginate(15);
       return redirect("/etricia_Monitor/diagnosis",['diagnosis'=>$diagnosis]);
    }

    public function diagnosis_request (Request $request){

        if($request->command == 'Request_start'){
        PowerpackControlls::where('packagecode',$request->code)->update([
            'Diagnosis'=>'ON',
          
         ]);  
         }      
     elseif($request->command =='Request_stop'){
       PowerpackControlls::where('packagecode',$request->code)->update([
            'Diagnosis'=>'OFF',
            
         ]); 
     }
     
    }

    public function excel_export(Request $request){
        Excel::download(new DiagnosisExport, 'Diagnosis.xlsx');
         return redirect('/etricia_Monitor');
    }

 

}
