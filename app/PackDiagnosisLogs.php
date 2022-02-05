<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackDiagnosisLogs extends Model
{
    protected $fillable = [
        'packagecode', 'TempSensor','Relay','CurrentSensor','VoltageSensor','MemoryShield','RTC','Switch',
    ];

    /*   $table->increments('id');
            $table->string('packagecode');
            $table->string('TempSensor')->nullable();
            $table->string('Relay')->nullable();
             $table->string('CurrentSensor')->nullable();
             $table->string('VoltageSensor')->nullable();
             $table->string('MemoryShield')->nullable();
             $table->string('RTC')->nullable();
             $table->string('Switch')->nullable();*/
}
