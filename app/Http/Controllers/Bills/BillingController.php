<?php

namespace App\Http\Controllers\Bills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
use App\Billing;
use App\CustomerAccount;
use App\Notifications;
use App\Payments;
use Auth;
use App\powerpackPackage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BillingController extends Controller
{
     public function index(Request  $request)
    {
        $code = Auth::user()->serverip;
      $billl_list = Billing::where('PackCode',$code)->orderBy('id','DESC')->paginate(15);
        return view('bill.index',compact('billl_list'));
    }
    public function show(Request  $request)
    {
        $billl_list = Billing::where('PackCode',$code)->orderBy('id','DESC')->paginate(15);
        return view('bill.index',compact('billl_list'));


    }
}
