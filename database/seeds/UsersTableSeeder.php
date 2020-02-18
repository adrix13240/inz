<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->imie = 'Adrian';
        $user->nazwisko = 'Wesołowski';
        $user->pesel = '123456789';
        $user->adres = 'Dębsko';
        $user->email = 'adrix13240@gmail.com';
        $user->password = bcrypt('adminadmin');
        $user->save();
//
    }
}
