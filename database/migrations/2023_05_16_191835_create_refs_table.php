<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refs', function (Blueprint $table) {
            $table->bigIncrements('ID_Ref');
            $table->string('employeur');
            $table->string('poste');
            $table->string('dateDebut');
            $table->string('dateFin');
            $table->string('attestation')->nullable();
            $table->string('domaines')->nullable();
            $table->string('ID_Salarie');
            $table->boolean('archived');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refs');
    }
};
