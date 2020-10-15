<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Pedro Hallat",
            "password" => Hash::make(123),
            "email" => "pepito@gmail.com"
        ]);

        $user = User::create([
            "name" => "Juanes Mendez",
            "password" => Hash::make(123),
            "email" => "rating@gmail.com"
        ]);

    }
}
