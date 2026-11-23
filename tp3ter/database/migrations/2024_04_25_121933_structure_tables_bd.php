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
        $table->string('nomClient');
        $table->string('villeClient');
        });

       Schema::create('location', function (Blueprint $table) {
        $table->increments('idLocation');
        $table->string('dureeLocation');
                $table->integer('idClient');
        });

        Schema::create('materiaux', function (Blueprint $table) {
        $table->increments('idMateriaux');
        $table->string('libelleMateriaux');
        });

        Schema::create('location_materiaux', function (Blueprint $table) {
        $table->integer('idLocation')->unsigned();
        $table->integer('idMateriaux')->unsigned();
        $table->primary(['idLocation', 'idMateriaux']);
        $table->foreign('idLocation')->references('idLocation')->on('location');
        $table->foreign('idMateriaux')->references('idMateriaux')->on('materiaux');
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
