<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveilancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveilances', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_id')->unsigned();
            $table->string('package');
            $table->string('packagecode');
            $table->string('package_uses');
            $table->integer('cam_numbers')->default(3);
            $table->String('cam1_adress')->nullable();
            $table->String('cam2_adress')->nullable();
            $table->String('cam3_adress')->nullable();
            
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
        Schema::dropIfExists('surveilances');
    }
}
