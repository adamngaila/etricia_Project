<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class userAPI extends Controller
{
   public function AddUser(Request $request)
   {
    /*this function is allow mobile app user to register to the database*/

        $details = new User();
        

            $details->name=$request->input("name");
             $details->phone=$request->input("phone");
            $details->serverip=$request->input("serverip");
             $details->email=$request->input("email");
             $details->password=$request->input("password");
             $details->location=$request->input("location");
              $details->language=$request->input("language");
               $details->region=$request->input("region");

            $details->save();

            return echo"success";

   }


   public function loginAuth(Request $request)
   {
     /*this function is to allow user to log in*/

        if( Auth::user()->email==$request->input("email")
        {
            return echo"ok";


        }
        if( Auth::user()->name==$request->input("name")
        {
            return echo"ok";

        }
        if( Auth::user()->serverip==$request->input("serverip")
        {
            return echo"ok";

        }

   }
}
