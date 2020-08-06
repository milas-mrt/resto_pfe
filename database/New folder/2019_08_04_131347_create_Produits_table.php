<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('composants');
            $table->float('prix');
            $table->enum('type', ['entree', 'pricipal', 'boisson', 'dessert']);
            $table->text('image')->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::drop('Produits');
    }
}
