<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('motdepasse')->nullable();
            $table->string('numtel')->nullable();
            $table->text('adresse')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Clients');
    }
}
