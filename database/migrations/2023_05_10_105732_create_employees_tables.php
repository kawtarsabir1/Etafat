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

        Schema::dropIfExists('experiences');
        Schema::dropIfExists('projets');
        Schema::dropIfExists('formations');
        Schema::dropIfExists('informations');
        

        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('ID_Salarie');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('CIN');
            $table->date('DateNaissance');
            $table->string('LieuNaissance');
            $table->string('SituationFamiliale');
            $table->integer('NombreEnfants');
            $table->string('Nationalite');
            $table->string('Adresse_1');
            $table->string('Adresse_2')->nullable();
            $table->integer('Code_Postal');
            $table->string('Email');
            $table->string('TelephoneFixe');
            $table->string('TelephonePortable');
            $table->string('PhotoIdentite');
            $table->string('Profil');
            $table->string('NumeroCNSS');
            $table->string('ResponsableHierarchique');
            $table->string('Poste');
            $table->date('DateEmbauche');
            $table->string('DepartementAffectation');
            $table->bigInteger('ContratTravailNumero');
            $table->string('TypeContrat');
            $table->date('ContratDu');
            $table->date('ContratAu');
            $table->string('Langues');
            $table->string('Niveau');
            $table->integer('Archived');
            $table->timestamps();
        });

        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('ID_Formation');
            $table->integer('ID_Salarie');
            $table->foreign('ID_Salarie')->references('ID_Salarie')->on('informations');
            $table->string('intitule');
            $table->string('etablissement');
            $table->date('obtention');
            $table->string('diplome')->nullable();
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('ID_Experience');
            $table->integer('ID_Salarie');
            $table->foreign('ID_Salarie')->references('ID_Salarie')->on('informations');
            $table->string('employeur');
            $table->string('poste');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('attestation')->nullable();
            $table->timestamps();
        });

        Schema::create('projets', function (Blueprint $table) {
            $table->bigIncrements('ID_Projet');
            $table->integer('ID_Salarie');
            $table->foreign('ID_Salarie')->references('ID_Salarie')->on('informations');
            $table->integer('ID_reference');
            $table->string('poste');
            $table->string('missions');
            $table->string('description');
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
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('projets');
        Schema::dropIfExists('formations');
        Schema::dropIfExists('informations');
    }
};
