<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerpackParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerpack_parameters', function (Blueprint $table) {
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
        Schema::dropIfExists('powerpack_parameters');
    }
}
