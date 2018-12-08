<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("id_user")->nullable();
            $table->unsignedInteger("id_room");
            $table->unsignedInteger("id_meal")->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->foreign('id_meal')->references('id')->on('meals');
            $table->date('date_from');
            $table->date('date_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
