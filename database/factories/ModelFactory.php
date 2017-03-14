<?php

use App\Models\User;
use App\Models\Company;
use App\Models\Sale;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
require_once("Documents.php");

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;
    $cpfs = cpfs();

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'cpf' => $cpfs[array_rand($cpfs, 1)],
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'phone_number' => $faker->phoneNumber,
        'birth_date' => $faker->dateTimeThisCentury,
    ];
});

$factory->define(Company::class, function (Faker\Generator $faker) {
    $cnpjs = cnpjs();
    return [
       'user_id' => 1,
       'name' => $faker->company,
       'cnpj' => $cnpjs[array_rand($cnpjs, 1)],
       'presentation' => $faker->paragraph,
       'image' => $faker->image(public_path('assets/img'), 720, 480, '', false),
   ];
});

$factory->define(Sale::class, function (Faker\Generator $faker) {
    return [
        'company_id' => rand(1, 6),
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'due_date' => $faker->dateTimeThisMonth,
        'daily_limit' => 50,
        'minimum_users' => 5,
        'value' => $faker->randomFloat(2, 10, 100),
    ];
});
