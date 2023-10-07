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
use PDF;

class BillingController extends Controller
{
     public function index(Request  $request)
    {
        $code = Auth::user()->serverip;
      $billl_list = Billing::where('PackCode',$code)->orderBy('id','DESC')->paginate(25);
      $payments = Payments::where('PackCode',$code)->orderBy('id','DESC')->paginate(25);
      $statement = CustomerAccount::where('PackCode',$code)->first();
        return view('bill.index',compact('billl_list','payments','statement'));
    }
    public function showPayments(Request  $request)
    {
        $billl_list = Billing::where('PackCode',$code)->orderBy('id','DESC')->paginate(25);
        return view('bill.index',compact('billl_list'));

    }
    Public function showStatement(){
        
    }
    public function Generate_pdf(Request  $request){
        $code = Auth::user()->serverip;

        $statement = CustomerAccount::where('PackCode',$code)->first()->toArray();

      $data = ['title' => 'Laravel 7 Generate PDF From View Example Tutorial'];
        $pdf = PDF::loadView('bill\invoice',$data);
  
        return $pdf->download('invoice.pdf');
    }

}
 