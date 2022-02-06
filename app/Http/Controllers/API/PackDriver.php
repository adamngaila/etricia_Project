<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;
use App\User;
use App\powerpackPackage;
use App\PackDiagnosisLogs;
use App\CustomerAccount;
use Auth;
use App\powerpackPackage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackDriver extends Controller
{
    public function PackSystemDiagnosis(Request $request)
    {
        $diagnosis = new PackDiagnosisLogs;
        $diagnosis->packagecode = $request->input("packagecode");
         $diagnosis->TempSensor = $request->input("TempSensor");
          $diagnosis->Relay = $request->input("Relay");
          $diagnosis->CurrentSensor = $request->input("CurrentSensor");
          $diagnosis->VoltageSensor = $request->input("VoltageSensor");
          $diagnosis->MemoryShield = $request->input("MemoryShield");
          $diagnosis->RTC = $request->input("RTC_status");
          $diagnosis->Switch = $request->input("Switch");

          $diagnosis->save();

          $response = ['faults'=>$diagnosis];
            return response($response,201);

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
    public function PackControll(Request $request)
    {
        
    }
}
