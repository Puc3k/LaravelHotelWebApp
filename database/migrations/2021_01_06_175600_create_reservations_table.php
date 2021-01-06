<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('day_in');
            $table->date('day_out');
            $table->boolean('status');
            $table->integer('user_id')->unsinged();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('city_id')->unsinged();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->integer('room_id')->unsinged();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}