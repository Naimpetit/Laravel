<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
   Schema::create('commande', function (Blueprint $table) {
    $table->increments('idCommande');
    $table->date('dateCommande');
    $table->string('nomClient');
});

    Schema::create('produit', function (Blueprint $table) {
    $table->increments('idProduit');
    $table->string('libelleProduit');
    $table->integer('prixProduit');
});

    Schema::create('commande_produit', function (Blueprint $table) {
    $table->integer('idCommande')->unsigned();
    $table->integer('idProduit')->unsigned();
    $table->integer('quantite');
    $table->primary(['idCommande', 'idProduit']);
    $table->foreign('idCommande')->references('idCommande')->on('commande');
    $table->foreign('idProduit')->references('idProduit')->on('produit');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
