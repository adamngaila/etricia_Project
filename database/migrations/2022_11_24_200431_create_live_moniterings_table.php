<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveMoniteringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live_moniterings', function (Blueprint $table) {
              $table->bigIncrements('id');
            $table->string('packagecode');
            $table->double('volts')->nullable();
            $table->double('current')->nullable();
            $table->double('Temperature')->nullable();
            $table->double('power')->nullable();
            $table->double('consumption')->nullable();
             $table->string('ChargeLevel')->nullable();
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
        Schema::dropIfExists('live_moniterings');
    }
}
