<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileAppManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_app_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('AppPath');
            $table->double('AppVersion')->nullable();
            $table->double('Updates')->nullable();
            $table->double('AppOs')->nullable();
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
        Schema::dropIfExists('mobile_app_managers');
    }
}
