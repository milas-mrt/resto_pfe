<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterForeignKeyUserIdCommandeProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commande_produit', function (Blueprint $table) {
             $table->foreign('commande_id') ->references('id')->on('commandes');
            $table->foreign('produit_id') ->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commande_produit', function (Blueprint $table) {
            //
            $table->dropForeign('commande_produit_commande_id_foreign');
            $table->dropForeign('commande_produit_produit_id_foreign');
        });
    }
}
