<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControls;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PowerpackAPI extends Controller
{
    //
    public function save(Request $request)
    {
        $parameter = new PowerpackParameters;
        $paramete->packagecode = $request->input("packagecode");
        $paramete->volts = $request->input("volts");
        $paramete->current = $request->input("current");
        $paramete->Temperature = $request->input("Temperature");
        $parameter->save();

        return json_encode($parameter);  
    }
}
