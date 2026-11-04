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
        Schema::create('sport',function(Blueprint$table){
        $table->increments('idSport');
        $table->string('libelleSport',15);
        });

        Schema::create('joueur',function(Blueprint$table){
        $table->increments('idJoueur');
        $table->string('nomJoueur',15);
        $table->integer('idSport');
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
