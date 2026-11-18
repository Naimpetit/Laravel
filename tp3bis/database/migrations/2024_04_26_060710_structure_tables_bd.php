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
        Schema::create('saison',function(Blueprint$table){
        $table->increments('idSais');
        $table->string('libelleSais',20);
        });

        Schema::create('aliment',function(Blueprint$table){
        $table->increments('idAl');
        $table->string('libelleAl',15);
        $table->integer('stockAl');
        });

    Schema::create('aliment_saison', function (Blueprint $table) {
    $table->integer('idSais')->unsigned();
    $table->integer('idAl')->unsigned();
    $table->integer('prix');
    $table->primary(['idSais', 'idAl']);
    $table->foreign('idSais')->references('idSais')->on('saison');
    $table->foreign('idAl')->references('idAl')->on('aliment');
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
