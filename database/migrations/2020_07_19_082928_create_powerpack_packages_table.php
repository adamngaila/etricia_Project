<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerpackPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerpack_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('packagecode')->unique();
            $table->string('package')->nullable();
            $table->string('package_uses')->nullable();
            $table->string('PackPhone')->nullable();
            $table->string('APN')->nullable();
            $table->string('unit_cost')->nullable();
            $table->string('ChargeLevel')->nullable();
            $table->string('PackageStatus')->nullable();
            $table->string('Temperature')->nullable();
            $table->double('unit_cost')->nullable();
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
        Schema::dropIfExists('powerpack_packages');
    }
}
