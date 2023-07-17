<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('code_patrimoine');
            $table->string('n_convention');
            $table->string('denomination');
            $table->string('adresse');
            $table->string('superficie');
            $table->string('type_detention')->nullable();
            
            $table->integer('commune_id')->unsigned()->nullable();
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');

            $table->integer('region_bam_id')->unsigned()->nullable();
            $table->foreign('region_bam_id')->references('id')->on('region_bams')->onDelete('cascade');

            $table->integer('region_postale_id')->unsigned()->nullable();
            $table->foreign('region_postale_id')->references('id')->on('region_postales')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sites');
    }

}
