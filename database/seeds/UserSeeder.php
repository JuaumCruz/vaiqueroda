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
            'name' => "Admin",
            'email'=> "admin@admin.com",
            'cpf'=> "1234567890",
            'birth_date'=> "1999-01-01",
            'password'=> bcrypt('admin'),
            'phone_number' => "99900-0000"
        ]);

        for($i=0; $i < 10; $i++) {
            factory(\App\User::class)->create([
                'name' => "User {$i}",
                'email'=> "user{$i}@vaique.com",
                'cpf'=> "0000000000{$i}",
                'birth_date'=> "199{$i}-01-01",
                'password'=> bcrypt("user{$i}"),
                'phone_number' => "99900-000{$i}"
            ]);
        }

    }
}
