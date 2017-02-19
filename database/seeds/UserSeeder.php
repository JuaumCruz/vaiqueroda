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

        for($i=0; $i < 10; $i++) {
            factory(\App\User::class)->create([
                'name' => "User APP {$i}",
                'email'=> "user{$i}@vaique.com",
                'cpf'=> "0000000000{$i}",
                'birth_date'=> "199{$i}-01-01",
                'password'=> bcrypt("user{$i}"),
                'phone_number' => "8399900000{$i}"
            ]);
        }

    }
}
