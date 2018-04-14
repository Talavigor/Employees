<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuniorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juniors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('middle_id');
            $table->foreign('middle_id')->references('id')->on('middles');
            $table->string('name');
            $table->string('position');
            $table->date('employment_date');
            $table->integer('salary');
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
        Schema::dropIfExists('juniors');
    }
}
