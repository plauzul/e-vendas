<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => 'Paulo Henrique Ramos Ferreira',
            'email' => 'henriq10@outlook.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
