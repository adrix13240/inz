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
            $table->biginteger('iduser')->unsigned();
            $table->foreign('iduser')->references('id')->on('users');
            $table->biginteger('idstatus')->unsigned()->default('1');
            $table->foreign('idstatus')->references('id')->on('status_rezerwacjis');
            $table->date('od');
            $table->biginteger('idsamochod')->unsigned()->unique();
            $table->foreign('idsamochod')->references('id')->on('samochods');
            $table->biginteger('idubezpieczenie')->unsigned();
            $table->foreign('idubezpieczenie')->references('id')->on('ubezpieczenies');
            $table->boolean('fotelik')->default('0');
            $table->boolean('nawigacja')->default('0');
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
        Schema::dropIfExists('rezerwacjas');
    }
}
