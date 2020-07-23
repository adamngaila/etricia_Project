<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    protected $fillable = [
        'user_id','powerpack_id','surveilance_id', 'adress', 'package','packagecode','packageuses',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);

    }

}
