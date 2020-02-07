<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezerwacjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezerwacjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('iduser');
            $table->unsignedbiginteger('idstatus');
            $table->unsignedbiginteger('idpoczatek');
            $table->unsignedbiginteger('idkoniec');
            $table->date('od');
            $table->date('do');
            $table->unsignedbiginteger('idsamochod');
            $table->integer('idubezpieczenie');
            $table->boolean('fotelik');
            $table->boolean('nawigacja');
            $table->timestamps();
        });
        Schema::table('rezerwacjas', function (Blueprint $table) {
            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idstatus')->references('id')->on('status_rezerwacjis');
            $table->foreign('idpoczatek')->references('id')->on('oddzials');
            $table->foreign('idkoniec')->references('id')->on('oddzials');
            $table->foreign('idsamochod')->references('id')->on('samochods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezerwacjas');
    }
}
