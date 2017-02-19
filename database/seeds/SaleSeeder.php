<?php

use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Sale::class)->create([
            'company_id' => 1,
            'name' => '20% DESCONTO RODIZIO',
            'description' => '',
            'due_date' => '2017-02-28',
            'daily_limit' => 50,
            'minimum_users' => 10,
            'value' => '14.99'
        ]);

        factory(\App\Sale::class)->create([
            'company_id' => 2,
            'name' => '30% DESCONTO KART',
            'description' => 'Desconto 2h Kart',
            'due_date' => '2017-02-28',
            'daily_limit' => 100,
            'minimum_users' => 5,
            'value' => '54.99'
        ]);

        factory(\App\Sale::class)->create([
            'company_id' => 5,
            'name' => 'DESCONTO PARA 5 PESSOAS',
            'description' => '',
            'due_date' => '2017-02-28',
            'daily_limit' => 100,
            'minimum_users' => 5,
            'value' => '34.99'
        ]);

        factory(\App\Sale::class)->create([
            'company_id' => 5,
            'name' => 'DESCONTO PARA 10 PESSOAS',
            'description' => '',
            'due_date' => '2017-03-31',
            'daily_limit' => 100,
            'minimum_users' => 10,
            'value' => '29.99'
        ]);
    }
}
