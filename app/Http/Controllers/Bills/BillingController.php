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
     public function index()
    {
        return view('bill.index');
    }
    public function show(Request  $request)
    {
        $billl_list = Billing::where('PackCode',$request->code)->orderBy('id','DESC')->paginate(10);
        return view('bill.index',compact('billl_list'));


    }
}
