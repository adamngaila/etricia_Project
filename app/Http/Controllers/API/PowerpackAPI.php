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
       $ETParams = PowerpackParameters::where('packagecode', $request->code)->take(-3)->get();

        $response = json_encode($ETParams);

       return ($response);


    }
}
