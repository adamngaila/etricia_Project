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
        $paramete->packagecode = $request->get("packagecode");
        $paramete->volts = $request->get("volts");
        $paramete->current = $request->get("current");
        $paramete->Temperature = $request->get("Temperature");
        $parameter->save();

        return json_encode($parameter);  
    }
}
