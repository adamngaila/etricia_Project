<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPowerpackPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('powerpack_packages', function (Blueprint $table) {
            $table->string('Inveter_online_hrs')->nullable();
            $table->string('Inveter_offline_hrs')->nullable();
            $table->string('grid_offline_hrs')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('powerpack_packages', function (Blueprint $table) {
            //
        });
    }
}
