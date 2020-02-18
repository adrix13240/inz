<?php

use Illuminate\Database\Seeder;
use App\StatusRezerwacji;

class Status_RezerwacjisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new StatusRezerwacji();
        $status->nazwa = 'Rozpoczęta';
        $status->save();

        $status = new StatusRezerwacji();
        $status->nazwa = 'Zakończona';
        $status->save();

        $status = new StatusRezerwacji();
        $status->nazwa = 'Anulowana';
        $status->save();
    }
}
