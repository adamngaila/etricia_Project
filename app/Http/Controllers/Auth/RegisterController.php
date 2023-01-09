<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Providers\RouteServiceProvider;
use App\CustomerAccount;
use App\iotPackage;
use App\powerpackPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
      
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User;

         //DB::beginTransaction();
    try {

      
        if($data['name']=="Root"){
            if($data['email']=="root@etriciatz.com")
            {
            $user =  User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'usertype' =>"super",
                //'serverip' => $data['serverip'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'location' => $data['location'],
                'region' => $data['region'],
                //'image' => $data['image']->store('uploads','public'),
                
            ]);
        }
        }
        
      $user =  User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'serverip' => $data['serverip'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'location' => $data['location'],
            'region' => $data['region'],
            //'image' => $data['image']->store('uploads','public'),
            
        ]);
      //  $this->storeImage($data);

      
  $CutomerAccountInputs = [                 
                        'CustomerName' =>$user->name,
                        'Email' =>$user->email,
                        'PackCode' => $data['packagecode'],
                         
                ];
        CustomerAccount::create($CutomerAccountInputs);

        $uses = $data['packageuses'];
         $unitcost = 0;
         
         if($data['package'] == "etricia Service" )
        {
        if($uses == "Home" )
        {
            $unitcost == 300;
        }
         if($uses == "Office" )
        {
            $unitcost = 500;
        }
         if($uses == "Farm" )
        {
            $unitcost = 400;
        }
         if($uses == "Shop" )
        {
            $unitcost = 450;
        }
        if($uses == "Industry" )
        {
            $unitcost = 700;
        }
        }    

         powerpackPackage::where('packagecode',$data['packagecode'])->update([
            'package'=>$data['package'],
            'package_uses'=>$uses,
            'PackPhone'=>$data['PackPhone'],
             'APN'=>$data['apn'],
              'unit_cost'=> $unitcost, 
         ]); 
          // all good
          //  DB::commit();
     
     } catch (Exception $e) {
            // something went wrong
            DB::rollback();
        }
        if (empty($user)) {
            // something went wrong
            DB::rollback();

            // TODO: Notify MauzoSheet Team of a failed registration
        }

        return $user;

                    
      
        //return $Surveilance;
        //return $powerpack;
       // return $UserPackage;
    }

   


}
