<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class powerpackPackage extends Model
{
    protected $fillable = [
        'packagecode', 'package','package_uses','PackPhone','APN','unit_cost','ChargeLevel','PackageStatus','Temperature','GridStatus','Inveter_online_hrs','Inveter_offline_hrs','grid_offline_hrs',
    ];

    
}
