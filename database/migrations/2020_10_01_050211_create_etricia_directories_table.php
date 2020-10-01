<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtriciaDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etricia_directories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('packagecode');
            $table->string('serial_no');
            $table->string('capacity');
            $table->double('cell_number');
            $table->string('description');
            $table->double('production_cost');
            $table->double('selling_price');
            $table->string('production_date');
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
        Schema::dropIfExists('etricia_directories');
    }
}
