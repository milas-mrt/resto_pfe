<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterForeignKeyReservationIdProduitId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation_produit', function (Blueprint $table) {
            //
            $table->foreign('reservation_id') ->references('id')->on('reservations');
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
        Schema::table('reservation_produit', function (Blueprint $table) {
            //
            $table->dropForeign('reservation_produit_commande_id_foreign');
            $table->dropForeign('reservation_produit_produit_id_foreign');
        });
    }
}
