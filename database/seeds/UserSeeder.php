<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => "Admin Vai que Roda!",
            'email'=> "admin@admin.com",
            'cpf'=> "71762747111",
            'birth_date'=> "1999-01-01",
            'password'=> bcrypt('admin'),
            'phone_number' => "11985445522"
        ]);

        factory(\App\User::class)->create([
            'name' => "User APP",
            'email'=> "user@vaique.com",
            'cpf'=> "05518928467",
            'birth_date'=> "1990-01-01",
            'password'=> bcrypt("user"),
            'phone_number' => "83999000000"
        ]);
    }
}
