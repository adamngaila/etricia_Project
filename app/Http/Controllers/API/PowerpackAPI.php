<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
use App\Billing;
use App\CustomerAccount;
use App\Notifications;
use App\Payments;
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
      $CurrentParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('current');

      $Time = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('id');

       $VoltParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('volts');

       $TempParams = PowerpackParameters::where('packagecode', $request->code)->orderBy('id','desc')->limit(4)->pluck('Temperature');

       $AvgAmps = PowerpackParameters::where('packagecode', $request->code)->avg('current');
       $AvgVolts = PowerpackParameters::where('packagecode', $request->code)->avg('volts');

        $response = [
         'amps'=> $CurrentParams,
         'volts' => $VoltParams,
         'temp' => $TempParams,
         'avgAmps' => $AvgAmps,
         'AvgVolts' => $AvgVolts,
         'created_at' => $Time,
               ];

       return response($response,201);

    }
    public function saveParams(Request $request)
    {
      //saving to parameters table
       $parameter = new PowerpackParameters;
        $parameter->packagecode = $request->input("packagecode");
        $parameter->volts = $request->input("volts");
        $parameter->current = $request->input("current");
        $parameter->Temperature = $request->input("Temperature");
         $parameter->power = $request->input("power");
          $parameter->consumption = $request->input("consumption");
          $parameter->ChargeLevel = $request->input("ChargeLevel");
        $parameter->save();

        //save billing record
         $billing_data = new Billing;
          $cost = (100*($request->input("consumption")));

         $billing_data->PackCode = $request->input("packagecode");
         $billing_data->Consumption = $request->input("consumption");
         $billing_data->ConsumtionCost = $cost;
          $billing_data->CostRef = $this->generateCostRef();

          $billing_data->save();

          //update customer account

         $cost_consumption = Billing::where('PackCode',$request->packagecode)->sum("ConsumtionCost");
         $total_cons = Billing::where('PackCode',$request->packagecode)->sum("Consumption");
                  $total_pay = Payments::where('PackCode',$request->packagecode)->sum('AmountPaid');
               $balance = $total_pay - $cost_consumption;

         CustomerAccount::where('PackCode',$request->packagecode)->update([
            'TotalCost'=> $cost_consumption, 
            'TotalConsumption'=>$total_cons,
            'ToatlPayment'=>$total_pay,
             'Balance' =>$balance]); 

         $response = [
            'parameters'=>$parameter,
            'BillData'=>$billing_data,
                              ];

          $notification = new Notifications;
          $message = "total consumtpion wh ".$total_cons.", cost of consumption Tzs ".$cost_consumption.", Last bill ref: ".$this->generateCostRef();

          $notification->packagecode = $request->input("packagecode");
          $notification->NotificationType = "Bill and Consumption";
          $notification->Message =  $message;
          $notification->save();



        return response($response,201);  
        
    }
    

     public function generateCostRef(){
      do{
         $cost_ref = random_int(135790, 99999999);

      }while(Billing::where('CostRef',"=",$cost_ref)->first());

      return $cost_ref;

     }


     public function fetch_bill(Request $request){
      $bill_history = Billing::where('PackCode',$request->code)->orderBy('id','desc')->limit(5)->pluck('ConsumtionCost');
      $comsumption_history = Billing::where('PackCode',$request->code)->orderBy('id','desc')->limit(5)->pluck('Consumption');
      $bill_ref = $this->generateCostRef();
        $details = CustomerAccount::where('PackCode',$request->code)->first();
         $response = [
            'bills' =>  $details,
            'bill_ref'=> $bill_ref,
            'bill_history'=>$bill_history,
            'consumption_history'=>$comsumption_history,
          ];
         return response($response,201);


    

     }
     public function fetch_notification (Request $request){


       $notification = Notifications::where('packagecode', $request->code)->orderBy('id','desc')->limit(8)->gret();
       return response($notification,201);

     }
}
