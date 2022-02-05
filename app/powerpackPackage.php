<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class powerpackPackage extends Model
{
    protected $fillable = [
        'packagecode', 'package','package_uses','PackPhone','ServiceProvider','APN','unit_cost','ChargeLevel','PackageStatus','Temperature',
    ];
public function user()
    {
        return $this->belongsTo(User::class);

    }
}
