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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("ste");
            $table->string("nature");
            $table->string("type");
            $table->string("adresse");
            $table->string("tel");
            $table->string("email");
            $table->string("fax");
            $table->string("site");
            $table->string("ice");
            $table->string("rc");
            $table->string("patente");
            $table->string("cnss");
            $table->string("if");
            $table->string("rib");
            $table->string("capital");
            $table->boolean("client");
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
        Schema::dropIfExists('clients');
    }
};
