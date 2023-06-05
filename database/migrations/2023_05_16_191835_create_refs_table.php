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
            $table->string('client');
            $table->string('mantant');
            $table->string('annee');
            $table->string('attestation')->nullable();
            $table->string('objet');
            $table->string('nMarche');
            $table->string('category');
            $table->string('fiche');
            $table->string('logo');
            $table->string('localisation');
            $table->string('nRef');
            $table->string('societe');
            $table->string('missions');
            $table->string('description');
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
