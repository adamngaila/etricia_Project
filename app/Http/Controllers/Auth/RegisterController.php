<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Providers\RouteServiceProvider;
use App\iotPackage;
use App\UserPackage;
use App\powerpackPackage;
use App\surveilance;
use Carbon\Carbon;
use Illuminate\Http\Request;
      //  use Illuminate\Http\Response;
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
         //DB::beginTransaction();

        if($data['name']=="Root"){
            if($data['email']=="root@etricia.com")
            {
            $user =  User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'usertype' =>"super",
                'serverip' => $data['serverip'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'location' => $data['location'],
                'region' => $data['region'],
                //'language' => $data['language'],
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
            //'language' => $data['language'],
            
        ]);
      //  $this->storeImage($data);

        $surveilanceInputs = [
                        'user_id' => $user->id,
                        'package' => $data['package'],
                        'packagecode' => $data['packagecode'],
                         'package_uses' => $data['packageuses'],
                          'cam1_adress' => $data['cam1_adress'],
                          'cam2_adress' => $data['cam2_adress'],
                          'cam3_adress' => $data['cam3_adress'],

                    
                ];
                $Surveilance = surveilance::create($surveilanceInputs);
                $user->surveilance()->save($Surveilance);



        $powerpackInputs = [
                        'user_id' => $user->id,
                        'package' => $data['package'],
                        'packagecode' => $data['packagecode'],
                         'package_uses' =>  $data['packageuses'],
                          'IPaddress' => $user->serverip,


                    
                ];
                $powerpack = powerpackPackage::create( $powerpackInputs);
                $user->powerpack()->save($powerpack);


        $UserPackageInputs = [
                        'user_id' => $user->id,
                       // 'iot_id' => $iot->id,
                        'powerpack_id' => $powerpack->id,
                        'surveilance_id' =>$Surveilance->id, 
                       
                         'adress' => $user->serverip,
                         'package' => $data['package'],
                         'packagecode' => $data['packagecode'],
                         'packageuses' => $data['packageuses'],


                    
                ];
                $userPackage = UserPackage::create( $UserPackageInputs);
                    $user->userpackage()->save($userPackage);


        return $user;
        //return $Surveilance;
        //return $powerpack;
       // return $UserPackage;
    }

   


}
