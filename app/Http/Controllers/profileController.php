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


class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $code = Auth::user()->serverip;
        $Parameters = LiveMonitering::where('packagecode', $code)->latest()->first();

        $controlStatus = PowerpackControlls::where('packagecode', $code)->first();;

        $batery = powerpackPackage::where('packagecode', $code)->orderBy('id','desc')->limit(1)->pluck('ChargeLevel');

         return view('Profile.userprofile',compact('Parameters','controlStatus','batery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
