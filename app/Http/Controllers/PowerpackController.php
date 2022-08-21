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

class PowerpackController extends Controller
{
    public function index()
    {

        return view('etricia.etricia');
    }

    public function DrawCharts(Request $request)
    {
        $code = Auth::user()->serverip;
        $result = PowerpackParameters::where('packagecode',$code) ->where( 'created_at', '>', Carbon::now()->subDays(40))->get();
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
    public function control_pack(){

    }
    public function diagnosis_results(){
        $code = Auth::user()->serverip;
        $diagnosis = PackDiagnosisLogs::where('packagecode',$code)->where( 'created_at', '>', Carbon::now()->subDays(40))->paginate(15);
        return json_encode($diagnosis);
    }

 

}