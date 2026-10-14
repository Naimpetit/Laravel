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
        Schema::create('type',function(Blueprint$table){
        $table->increments('idType');
        $table->string('libelleType',15);
        });

        Schema::create('aliment',function(Blueprint$table){
        $table->increments('idAl');
        $table->string('libelleAl',15);
        $table->integer('prixAl');
        $table->integer('idType');
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
