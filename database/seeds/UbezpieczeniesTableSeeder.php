<?php

use Illuminate\Database\Seeder;
use App\Ubezpieczenie;

class UbezpieczeniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ubezpieczenie = new Ubezpieczenie();
        $ubezpieczenie->nazwa = 'Podstawowe';
        $ubezpieczenie->cena = '0';
        $ubezpieczenie->save();

        $ubezpieczenie = new Ubezpieczenie();
        $ubezpieczenie->nazwa = 'NNW';
        $ubezpieczenie->cena = '10';
        $ubezpieczenie->save();

        $ubezpieczenie = new Ubezpieczenie();
        $ubezpieczenie->nazwa = 'AC';
        $ubezpieczenie->cena = '20';
        $ubezpieczenie->save();
    }
}
