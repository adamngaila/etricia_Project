<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerpackControllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerpack_controlls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('packagecode');
            $table->string('fan')->nullable();
            $table->string('relay_1')->nullable();
            $table->string('relay_2')->nullable();
            $table->string('relay_3')->nullable();
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
        Schema::dropIfExists('powerpack_controlls');
    }
}
