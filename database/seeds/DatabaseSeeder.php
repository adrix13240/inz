<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarkasTableSeeder::class);
        $this->call(SegmentsTableSeeder::class);
        $this->call(OddzialsTableSeeder::class);
        $this->call(UbezpieczeniesTableSeeder::class);
        $this->call(Status_RezerwacjisTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SamochodsTableSeeder::class);
        $this->call(RezerwacjasTableSeeder::class);
    }
}
