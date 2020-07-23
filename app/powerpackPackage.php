<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class powerpackPackage extends Model
{
    protected $fillable = [
        'user_id', 'package','packagecode','package_uses','IPadress'
    ];
public function user()
    {
        return $this->belongsTo(User::class);

    }
}
