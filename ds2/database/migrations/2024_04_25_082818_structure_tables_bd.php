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
        Schema::create('client',function(Blueprint$table){
        $table->increments('idClient');
        $table->string('nomClient',15);
        });

        Schema::create('contrat',function(Blueprint$table){
        $table->increments('idContrat');
        $table->integer('montantContrat');
        $table->integer('idClient');
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
