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
            $table->biginteger('idmarka')->unsigned();
            $table->foreign('idmarka')->references('id')->on('markas');
            $table->string('model');
            $table->biginteger('idsegment')->unsigned();
            $table->foreign('idsegment')->references('id')->on('segments');
            $table->biginteger('idoddzial')->unsigned();
            $table->foreign('idoddzial')->references('id')->on('oddzials');
            $table->string('skrzynia');
            $table->string('kolor');
            $table->string('paliwo');
            $table->integer('miejsca')->default('5');
            $table->boolean('zamek')->default('0');
            $table->boolean('klimatyzacja')->default('0');
            $table->boolean('tempomat')->default('0');
            $table->boolean('zarezerwowany')->default('0');
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
        Schema::dropIfExists('samochods');
    }
}
