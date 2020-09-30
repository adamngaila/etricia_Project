<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerpackControlls extends Model
{
    //
    protected $fillable = [
        'packagecode', 'fan','relay_1','relay_2','relay_3'
    ];
}
