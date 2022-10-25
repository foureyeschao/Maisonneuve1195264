<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nom', 50);
            $table->string('adresse', 100);
            $table->string('phone', 13);
            $table->string('email', 50)->unique();
            $table->date('date_de_naissance');
            $table->unsignedBigInteger('villeId');
            $table->timestamps();
        });

        Schema::table('etudiants', function (Blueprint $table) {

            $table -> foreign ( 'villeId' ) -> references ( 'id' ) -> on ( 'villes' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
