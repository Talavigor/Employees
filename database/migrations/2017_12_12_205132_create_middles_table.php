<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiddlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('middles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('senior_id');
            $table->foreign('senior_id')->references('id')->on('seniors');
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
        Schema::dropIfExists('middles');
    }
}
