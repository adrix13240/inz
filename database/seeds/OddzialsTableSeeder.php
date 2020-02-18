<?php

use Illuminate\Database\Seeder;
use App\Oddzial;

class OddzialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oddzial = new Oddzial();
        $oddzial->miasto = 'Kalisz';
        $oddzial->ulica = 'Poznańska 1';
        $oddzial->telefon = '123456789';
        $oddzial->email = 'kalisz@wypozyczalnia.pl';
        $oddzial->save();

        $oddzial = new Oddzial();
        $oddzial->miasto = 'Ostrów';
        $oddzial->ulica = 'Kaliska 1';
        $oddzial->telefon = '123456788';
        $oddzial->email = 'ostrow@wypozyczalnia.pl';
        $oddzial->save();

        $oddzial = new Oddzial();
        $oddzial->miasto = 'Poznań';
        $oddzial->ulica = 'Warszawska 1';
        $oddzial->telefon = '123456787';
        $oddzial->email = 'poznan@wypozyczalnia.pl';
        $oddzial->save();
    }
}
