<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
use Auth;
use App\powerpackPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PowerpackAPI extends Controller
{
    //
    public function ProfileShow(Request $request)
    {
       $profile = \DB::table('users')->join('etricia_directories','users.serverip','=','etricia_directories.packagecode')->select('etricia_directories.*','users.*')->where('users.serverip','=',$request->input("code"))->first();
       $response = ['profile'=>$profile];

       return response($response,201);

    }
    public function PackParametersView(Request $request)
    { 
      $CurrentParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('current');

      $Time = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('created_at');

       $VoltParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('volts');

       $TempParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('Temperature');
       
       $AvgAmps = PowerpackParameters::where('packagecode', $request->code)->avg('current');
       $AvgVolts = PowerpackParameters::where('packagecode', $request->code)->avg('volts');

        $response = [
         'amps'=> $CurrentParams,
         'volts' => $VoltParams,
         'temp' => $TempParams,
         'avgAmps' => $AvgAmps,
         'AvgVolts' => $AvgVolts,
         'created_at' => $Time,
               ];

       return response($response,201);

    }
}
