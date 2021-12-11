<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\EtriciaDirectory;

class userAPI extends Controller
{
     protected function validator(Request $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10','min:10'],
            'serverip' => ['required', 'string', 'max:355'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'package' => ['required', 'string', 'min:12', 'max:12'],
             // 'region' => ['required', 'string'],
           //  'location' => ['required', 'string'],
            //'image' => [ 'file','max:5000'],
            
            
        ]);
    }


   public function AddUser(Request $request)
   {
    /*this function is allow mobile app user to register to the database*/
   

        $details = new User();

        $EDirectory = EtriciaDirectory::where('packagecode', $request->packagecode)->first();

          
           if(! $EDirectory){
        throw ValidationException::withMessages([
            'packagecode' => ['The provided package code is incorrect.'],
        ]);
    } else{
        $details->name=$request->input("name");
             $details->phone=$request->input("phone");
            $details->serverip=$request->input("packagecode");//packagecode
             $details->email=$request->input("email");
             $details->password= Hash::make($request->input("password"));
             $details->location=$request->input("location");
              $details->language=$request->input("language");
               $details->region=$request->input("region");

         $details->save();
        

            return $details->createToken($request->input('device_name'))->plainTextToken;

    }


        // $details->createToken($request->input('device_name'))->plainTextToken;

       

   }


   public function login(Request $request)
   {
     /*this function is to allow user to log in

        if( Auth::user()->email==$request->input("email")
        {
            return "ok";


        }
        if( Auth::user()->name==$request->input("name")
        {
            return "ok";

        }
        if( Auth::user()->serverip==$request->input("serverip")
        {
            return "ok";

        }*/

   }
}
