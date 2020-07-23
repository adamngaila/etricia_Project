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
            $table->integer('user_id');
            $table->string('package');
            $table->string('packagecode');
            $table->string('package_uses');
            $table->string('IPadress');
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
