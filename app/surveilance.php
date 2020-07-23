<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveilance extends Model
{
    
    protected $fillable = ['user_id', 'package','packagecode','package_uses','cam_numbers','cam1_adress','cam2_adress','cam3_adress'];

    //user model connecting to syrvbeilance model
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
