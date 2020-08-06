<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->nullable();
            $table->integer('quantite')->nullable();
            $table->float('prix')->nullable();
            $table->integer('nopersonne')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('table_id')->nullable();
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
        Schema::drop('Reservations');
    }
}
