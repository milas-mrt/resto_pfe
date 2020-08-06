<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouterForeignKeyUserIdCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->foreign('user_id') ->references('id')->on('users');
            $table->foreign('client_id') ->references('id')->on('Clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            //
            $table->dropForeign('commandes_user_id_foreign');
            $table->dropForeign('commandes_client_id_foreign');
        });
    }
}
