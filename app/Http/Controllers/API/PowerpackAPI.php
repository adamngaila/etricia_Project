<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
use App\Billing;
use App\CustomerAccount;
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
        $paramete->packagecode = $request->input("packagecode");
        $paramete->volts = $request->input("volts");
        $paramete->current = $request->input("current");
        $paramete->Temperature = $request->input("Temperature");
         $paramete->Temperature = $request->input("power");
          $paramete->Temperature = $request->input("consumption");
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
                  $total_pay = CustomerAccount::where('PackCode',$request->packagecode)->value('ToatlPayment');
               $balance = $total_pay - $cost_consumption;

         CustomerAccount::where('PackCode',$request->packagecode)->update([
            'TotalCost'=> $cost_consumption, 
            'TotalConsumption'=>$total_cons,
             'Balance' =>$balance]);

         $response = [
            'parameters'=>$parameter,
            'BillData'=>$billing_data,
                              ];



        return response($response,201);  
        
    }
    
     public function generateCostRef(){
      do{
         $cost_ref = random_int(135790, 99999999);

      }while(Billing::where('CostRef',"=",$cost_ref)->first());

      return $cost_ref;

     }
}
