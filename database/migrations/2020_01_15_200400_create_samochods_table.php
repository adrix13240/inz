<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamochodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samochods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('idmarka');
            $table->string('model');
            $table->unsignedbiginteger('idsegment');
            $table->string('skrzynia');
            $table->string('kolor');
            $table->boolean('tempomat');
            $table->timestamps();
        });
        Schema::table('samochods', function (Blueprint $table) {
            $table->foreign('idmarka')->references('id')->on('markas')->onDelete('cascade');
            $table->foreign('idsegment')->references('id')->on('segments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samochods');
    }
}
