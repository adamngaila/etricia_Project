<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPowerpackParameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('powerpack_parameters', function (Blueprint $table) {
            $table->string('inveter_Status')->nullable();
            $table->string('Grid_Status')->nullable();
            $table->string('Running_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('powerpack_parameters', function (Blueprint $table) {
            //
        });
    }
}
