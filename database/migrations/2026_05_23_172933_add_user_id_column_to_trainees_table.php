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
        Schema::table('trainees', function (Blueprint $table) {

                $table->unsignedBigInteger('user_id');
                // Una colonna con all'interno un tipo di dato intero molto grande senza segno
                $table->foreign('user_id')->references('id')->on('users');//? Vincolo referenziale
                //Questi metodi definiscono una foreign key della tabella trainees collegata alla tabella users tramite i loro id specifi

                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainees', function (Blueprint $table) {

        $table->dropForeign(['user_id']); // Sto rompendo il vincolo referenziale
        $table->dropColumn('user_id'); // Sto eliminando la colonna creata


        });
    }
};
