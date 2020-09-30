<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerpackParameters extends Model
{
    //
    protected $fillable = [
        'packagecode', 's1_volts','s2_volts','s3_volts','s4_volts','s5_volts','s6_volts','Temperature'
    ];
}
