<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveMonitering extends Model
{
    //
        protected $fillable = [
        'packagecode','volts','current','Temperature','power','consumption','ChargeLevel'
    ];
}
