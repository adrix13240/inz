<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminRezerwacjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termin_rezerwacjis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbiginteger('idsamochod');
            $table->date('od');
            $table->date('do');
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
        Schema::dropIfExists('termin_rezerwacjis');
    }
}
