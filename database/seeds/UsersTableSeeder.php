<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Deivid Santos',
            'email'    => 'deividluiz.santos@hotmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name'     => 'Outro Usuario',
            'email'    => 'deividluizsantos7@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
