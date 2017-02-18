<?php

use Illuminate\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
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
            'password'=> bcrypt('admin')
        ]);

    }
}
