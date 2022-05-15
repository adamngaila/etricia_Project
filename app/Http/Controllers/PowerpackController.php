<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\powerpackPackage;
use App\PowerpackParameters;
use App\PowerpackControlls;
use Illuminate\Http\Request;


class PowerpackController extends Controller
{
    public function index()
    {
        return view('etricia.etricia');
    }

    public function DrawCharts(Request $request)
    {
  
        $result = \DB::table('powerpack_packages')
                            ->join('powerpack_parameters','powerpack_packages.packagecode','=','powerpack_parameters.packagecode')
                            ->select('powerpack_packages.*','powerpack_parameters.*')
                            ->where('user_id',$request->code)->get();
     $results =  \DB::table('powerpack_parameters')->get();           
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

 

}