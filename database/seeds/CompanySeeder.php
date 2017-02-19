<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "La Favoritta",
            'cnpj'=> "00123456000100",
            'presentation' => "Venha desfrutar com seus amigos de nossas maravilhosas pizzas com descontos especiais para grupos.",
            'image'=> "logo-lafavoritta.png",
        ]);

        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "Circuito Int Paladino",
            'cnpj'=> "00123456000102",
            'presentation' => "Venha se divertir com seus amigos em uma emocionante pista e demonstrar seu taleto como piloto.",
            'image'=> "paladino.jpg",
        ]);

        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "Parque Aguartico",
            'cnpj'=> "00123456000110",
            'presentation' => "Venha desfrutar de um dia de lazer em nossas piscinas com toda a família e amigos.",
            'image'=> "parqueaguatico.jpg",
        ]);

        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "Cachaçaria Central",
            'cnpj'=> "10123456000100",
            'presentation' => "Venha para um happy hour que você não vai esquecer. Ou vai? ;D",
            'image'=> "cachacariacentral.png",
        ]);

        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "Churrascaria Tererê",
            'cnpj'=> "00123456010100",
            'presentation' => "Desconto especiais para grupos em nosso rodízio de carne nobre.",
            'image'=> "terere.png",
        ]);

        factory(\App\Company::class)->create([
            'user_id' => 1,
            'name' => "Bessa Grill",
            'cnpj'=> "00123456110100",
            'presentation' => "Venha pra curtir com seus amigos e aproveite nossos descontos em boa companhia.",
            'image'=> "bessagrill.png",
        ]);
    }
}
