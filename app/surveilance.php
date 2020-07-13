<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveilance extends Model
{
    protected $redirectTo = '/login';
    protected $fillable = ['packageCode','cam_numbers','cam1_adress','cam2_adress','cam3_adress','cam4_adress'];

    //user model connecting to syrvbeilance model
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
