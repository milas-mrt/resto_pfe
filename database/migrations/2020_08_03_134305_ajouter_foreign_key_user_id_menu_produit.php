<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterForeignKeyUserIdMenuProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menu_produit', function (Blueprint $table) {
            //
             $table->foreign('menu_id') ->references('id')->on('Menus')->onDelete('cascade');
             $table->foreign('produit_id') ->references('id')->on('Produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_produit', function (Blueprint $table) {
           $table->dropForeign('menu_produit_menu_id_foreign');
           $table->dropForeign('menu_produit_produit_id_foreign');
        });
    }
}
