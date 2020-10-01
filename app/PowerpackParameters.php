<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerpackParameters extends Model
{
    //
    protected $fillable = [
        'packagecode','volts','current','Temperature'
    ];
}
