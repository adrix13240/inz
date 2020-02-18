<?php

use Illuminate\Database\Seeder;
use App\Marka;

class MarkasTableSeeder extends Seeder
{
    public function run()
    {
        $marka = new Marka();
        $marka->nazwa = 'Audi';
        $marka->save();

        $marka = new Marka();
        $marka->nazwa = 'BMW';
        $marka->save();

        $marka = new Marka();
        $marka->nazwa = 'Citroen';
        $marka->save();

        $marka = new Marka();
        $marka->nazwa = 'Dacia';
        $marka->save();

        $marka = new Marka();
        $marka->nazwa = 'Ford';
        $marka->save();

        $marka = new Marka();
        $marka->nazwa = 'Hyundai';
        $marka->save();
    }
}
