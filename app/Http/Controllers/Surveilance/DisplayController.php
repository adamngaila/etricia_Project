<?php

namespace App\Http\Controllers\Surveilance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\surveilance;
use App\User;
use Auth;
class DisplayController extends Controller
{
    function listIP()
    {
       $surveilancesIP = surveilance::all(); 

       return view(surveilance.dashboard,['surveilanceIP'=>$surveilancesIP]);




    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surveilance = new surveilance;
        $user = factory(\App\User::class)->user()->id;

        
         $surveilance->packageCode = request('packageCode');
         $surveilance->cam_numbers = request('cam_numbers');
         $surveilance->cam1_adress = request('cam1_adress');
         $surveilance->cam2_adress = request('cam2_adress');
         $surveilance->cam3_adress = request('cam3_adress');
         $surveilance->cam4_adress = request('cam4_adress');
        

        $user->surveilance()->save($surveilance);

        return view('/home');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surveilance = new surveilance;
        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'serverip' => $request->input('another_field'),
            'email' => $request->input('email'),

        ]);

        $mtumiaji = User::all();

        $surveilance->user_id = Auth::user()->id;
        $surveilance->packageCode = request('packageCode');
        $surveilance->cam_numbers = request('cam_numbers');
        $surveilance->cam1_adress = request('cam1_adress');
        $surveilance->cam2_adress = request('cam2_adress');
        $surveilance->cam3_adress = request('cam3_adress');
        $surveilance->cam4_adress = request('cam4_adress');
       

       $surveilance->save();
       return view('Profile.userprofile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
