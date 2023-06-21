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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->string('pay');
            $table->timestamps();
        });

        Schema::create('secteurs', function (Blueprint $table) {
            $table->id();
            $table->string('secteur');
            $table->timestamps();
        });

        Schema::create('financements', function (Blueprint $table) {
            $table->id();
            $table->string('financement');
            $table->timestamps();
        });

        Schema::create('ministeres', function (Blueprint $table) {
            $table->id();
            $table->string('ministere');
            $table->timestamps();
        });

        Schema::create('adjudications', function (Blueprint $table) {
            $table->id();
            $table->string('adjudication');
            $table->timestamps();
        });

        Schema::create('motifs', function (Blueprint $table) {
            $table->id();
            $table->string('motif');
            $table->timestamps();
        });

        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('partenaire');
            $table->timestamps();
        });

        Schema::create('soustraitants', function (Blueprint $table) {
            $table->id();
            $table->string('soustraitant');
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
        Schema::dropIfExists('types');
        Schema::dropIfExists('pays');
        Schema::dropIfExists('secteurs');
        Schema::dropIfExists('financements');
        Schema::dropIfExists('ministeres');
        Schema::dropIfExists('adjudications');
        Schema::dropIfExists('motifs');
        Schema::dropIfExists('partenaires');
        Schema::dropIfExists('soustraitants');
    }
};
