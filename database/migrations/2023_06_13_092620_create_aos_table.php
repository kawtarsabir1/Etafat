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
        Schema::create('aos', function (Blueprint $table) {
            $table->bigIncrements('id_ao');
            $table->string('type_ao');
            $table->string('pay_ao');
            $table->string('secteur_ao')->nullable();
            $table->string('financement_ao')->nullable();
            $table->string('ministere_ao')->nullable();
            $table->string('societe_ao')->nullable();
            $table->string('n_ao');
            $table->string('lot_ao')->nullable();
            $table->string('maître_ao');
            $table->string('objet_ao');
            $table->string('caution_provisoire_ao')->nullable();
            $table->string('annulation_ao')->nullable();
            $table->string('budget_ao')->nullable();
            $table->string('date_limit_ao');
            $table->string('mantant_soumission_ao');
            $table->string('bu_ao');
            $table->string('departements_ao');
            $table->string('departements_part');
            $table->string('partenaires_ao');
            $table->string('partenaires_part');
            $table->string('soustraitants_ao');
            $table->string('soustraitants_part');
            $table->string('responsable_ao');
            $table->string('adjudication_ao');
            $table->string('date_adjudication_ao')->nullable();
            $table->string('motif_ao')->nullable();
            $table->string('rejet_ao')->nullable();
            $table->string('adjudicataire_ao')->nullable();
            $table->string('mantant_moins_ao')->nullable();
            $table->string('archived')->default(0);
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
        Schema::dropIfExists('aos');
    }
};
