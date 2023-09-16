<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToLiveMoniterings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('live_moniterings', function (Blueprint $table) {
            
             $table->string('Inveter_Status')->nullable();
             $table->string('Charge_Status')->nullable();
             $table->string('Lock_Status')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('live_moniterings', function (Blueprint $table) {
            //
        });
    }
}
