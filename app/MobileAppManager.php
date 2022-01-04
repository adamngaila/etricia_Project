<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileAppManager extends Model
{
    protected $fillable = [
        'AppPath','AppVersion','Updates','AppOs'

    ];
}
