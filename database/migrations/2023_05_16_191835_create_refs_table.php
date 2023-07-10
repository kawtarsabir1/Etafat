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
            $table->string('montantTraveaux');
            $table->string('annee');
            $table->string('attestation')->nullable();
            $table->string('objet');
            $table->string('nMarche');
            $table->string('categories');
            $table->string('fiche')->nullable();
            $table->string('ficheExist')->nullable();
            $table->string('logo');
            $table->string('localisation');
            $table->string('nRef');
            $table->string('nIntern');
            $table->string('societe');
            $table->string('missions');
            $table->string('description');
            $table->boolean('groupement')->default(0);
            $table->integer('part')->default(100);
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
