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
        Schema::create('fournisseur',function(Blueprint$table){
            // Types de champs : https://laravel.com/docs/5.7/migrations#creating-columns
        $table->increments('idFour');
        $table->string('nomFour',20);
        $table->string('villeFour',20);
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
