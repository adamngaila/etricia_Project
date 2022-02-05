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





    }
    public function StatusCheck(Request $request)
    {

    }
    public function PackControll(Request $request)
    {
        
    }
}
