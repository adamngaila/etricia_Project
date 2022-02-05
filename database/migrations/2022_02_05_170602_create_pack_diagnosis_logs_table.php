<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackDiagnosisLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_diagnosis_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packagecode');
            $table->string('TempSensor')->nullable();
            $table->string('Relay')->nullable();
             $table->string('CurrentSensor')->nullable();
             $table->string('VoltageSensor')->nullable();
             $table->string('MemoryShield')->nullable();
             $table->string('RTC')->nullable();
             $table->string('Switch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack_diagnosis_logs');
    }
}
