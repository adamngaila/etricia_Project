<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PowerpackControlls extends Model
{
    //
    protected $fillable = [
        'packagecode', 'Lock','relay_1','relay_2','MasterControl','Diagnosis',
    ];
}
