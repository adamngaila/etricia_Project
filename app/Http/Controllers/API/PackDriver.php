<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
//use App\powerpackPackage;
use App\PackDiagnosisLogs;
use App\CustomerAccount;
use Auth;
use App\powerpackPackage;
use App\Notifications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackDriver extends Controller
{
    public function PackSystemDiagnosis(Request $request)
    {
        $diagnosis = new PackDiagnosisLogs;
        $notification = new Notifications;

        $message = "pack diagnisis results, Temperature Sensitivity: ".$request->input("TempSensor").",Current Sensitivity: ".$request->input("CurrentSensor")."SD storage: ".$request->input("MemoryShield");

        $diagnosis->packagecode = $request->input("packagecode");
         $diagnosis->TempSensor = $request->input("TempSensor");
          $diagnosis->Relay = $request->input("Relay");
          $diagnosis->CurrentSensor = $request->input("CurrentSensor");
          $diagnosis->VoltageSensor = $request->input("VoltageSensor");
          $diagnosis->MemoryShield = $request->input("MemoryShield");
          $diagnosis->RTC = $request->input("RTC_status");
          $diagnosis->Switch = $request->input("Switch");

          $diagnosis->save();

          $notification->packagecode = $request->input("packagecode");
          $notification->NotificationType = "Pack Diagnosis";
          $notification->Message =  $message;
          $notification->save();

          $response = ['faults'=>$diagnosis];
            return response($response,200);

    }
    public function StatusCheck(Request $request)
    {
        powerpackPackage::where('packagecode',$request->input("packagecode"))->update([
            'ChargeLevel'=>$request->input("ChargeLevel"),
            'PackageStatus'=>$request->input("PackageStatus"),
            'Temperature'=>$request->input("Temperature"),
         ]); 
        return response('statusUpdatesOk',201);

    }
    
        public function PackAdminControll(Request $request)
    {
        /*
            api/switch_control?packagecode for switching
            api/Lock_control?packagecode for locking
            api/admin_pack_control?packagecode= for admin
            api/pack_charge_control?packagecode= for charging 
            values are = ON and OFF for all controls
        */
            $switch = PowerpackControlls::where('packagecode',$request->input("packagecode"))->pluck('MasterControl');
             return response($switch,201);
    }
        public function PackLockControll(Request $request)
    {
        /*
            api/switch_control?packagecode for switching
            api/Lock_control?packagecode for locking
            api/admin_pack_control?packagecode= for admin
            api/pack_charge_control?packagecode= for charging 
            values are = ON and OFF for all controls
        */
             $switch = PowerpackControlls::where('packagecode',$request->packagecode)->pluck('Lock');
             return response(implode(" ",$switch),201);

    }
        public function PackUserControll(Request $request)
    {
        /*
            api/switch_control?packagecode for switching
            api/Lock_control?packagecode for locking
            api/admin_pack_control?packagecode= for admin
            api/pack_charge_control?packagecode= for charging 
            values are = ON and OFF for all controls
        */
             $switch = PowerpackControlls::where('packagecode',$request->input("packagecode"))->pluck('relay_1');
             return response($switch,201);
    }
    
}
