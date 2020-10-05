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
        $paramete->packagecode = $request->packagecode;
        $paramete->volts = $request->volts;
        $paramete->current = $request->current;
        $paramete->Temperature = $request->Temperature;
        $parameter->save();

        return json_encode($parameter);  
    }
}
