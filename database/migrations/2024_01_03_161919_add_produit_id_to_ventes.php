<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProduitIdToVentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id')->nullable(); // Vous pouvez utiliser nullable() si la colonne peut être vide
            $table->foreign('produit_id')->references('id')->on('produits'); // Assurez-vous que 'produits' est le nom correct de votre table de produits
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->dropForeign(['produit_id']);
            $table->dropColumn('produit_id');
        });
    }
}

