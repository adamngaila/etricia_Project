<?php

namespace App\Http\Controllers\API;
use App\PowerpackParameters;
use App\PowerpackControlls;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PowerpackAPI extends Controller
{
    //
    public function save(Request $request)
    {
        $paramete = new PowerpackParameters();
        $paramete->packagecode = $request->post("packagecode");
        $paramete->volts = $request->post("volts");
        $paramete->current = $request->post("current");
        $paramete->Temperature = $request->post("Temperature");
        $paramete->save();

        return (123);  
    }
}
