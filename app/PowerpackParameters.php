<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerpackParameters extends Model
{
    //
    protected $fillable = [
        'packagecode','volts','current','Temperature','power','consumption','inveter_Status','Grid_Status','Running_hours',
    ];
}
