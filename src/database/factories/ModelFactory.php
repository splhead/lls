<?php

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

use App\User;
use App\Contato;
use App\Cliente;
use App\Dependente;
use App\Item;
use App\Cardapio;
use App\Endereco;
use App\Conta;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    $data = [
        'nome'           => $faker->name,
        'email'          => $faker->safeEmail,
        'username'       => $faker->userName,
        'senha'          => $password ?: $password = bcrypt('secret'),
        // 'api_token' => str_random(60),
        'remember_token' => str_random(10)
    ];

    return $data;

    // dd($data);
});

$factory->define(Contato::class, function (Faker\Generator $faker) {

    $tipo = ['e-mail', 'facebook', 'whatsapp', 'instagram', 'twitter', 'snapchat', 'celular', 'fixo'];

    $donoType = $faker->randomElement(['App\Cliente', 'App\Dependente' ]);

    $dono = factory($donoType)->create();

    return [
        'tipo'      => $faker->randomElement($tipo),
        'contato'   => str_random(10),
        'dono_id'   => $dono->id,
        'dono_type' => $donoType
    ];

    // dd($data);
});

$factory->define(Cliente::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    $sexo = ['masculino', 'feminino'];

    return [
        'nome'      => $faker->name,
        'cpf'       => $faker->cpf(false),
        'data_nasc' => $faker->date,
        'sexo'      => $faker->randomElement($sexo)
    ];
});

$factory->define(Dependente::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));

    $sexo = ['masculino', 'feminino'];

    $cliente = factory('App\Cliente')->create();

    return [
        'nome'       => $faker->name,
        'cpf'        => $faker->cpf(false),
        'data_nasc'  => $faker->date,
        'sexo'       => $faker->randomElement($sexo),
        'cliente_id' => $cliente->id
    ];
});

$factory->define(Item::class, function (Faker\Generator $faker) {
    $tipo = ['normal', 'diferenciado'];

    return [
        'descricao' => str_random(10),
        'preco'     => $faker->randomFloat(2, 18, 50),
        'tipo'      => $faker->randomElement($tipo),
        //'desconto'  => $faker->randomFloat(2,1)
    ];
});

$factory->define(Cardapio::class, function (Faker\Generator $faker) {
    $dias = ['segunda','terça', 'quarta', 'quinta','sexta'];

    $item = factory('App\Item')->create();

    return [
        'dia'     => $faker->unique()->randomElement($dias),
        'item_id' => $item->id
    ];
});


$factory->define(Endereco::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\pt_BR\Address($faker));
    $donoType = $faker->randomElement(['App\Cliente', 'App\Dependente' ]);

    $dono = factory($donoType)->create();

    return [
        'logradouro'   => $faker->streetName,
        'bairro'       => $faker->name,
        'numero'       => $faker->randomDigit(2, 3),
        'complemento'  => $faker->name,
        'referencia'   => $faker->name,
        'taxa_entrega' => $faker->randomFloat(2, 1, 3),
        'dono_id'   => $dono->id,
        'dono_type' => $donoType
    ];
});

$factory->define(Conta::class, function (Faker\Generator $faker) {
    $cliente = factory('App\Cliente')->create();

    return [
        'agencia'    => str_random(6),
        'conta'      => str_random(6),
        'limite'     => $faker->randomFloat(2, 100, 500),
        'saldo'      => $faker->randomFloat(2, 100, 1000),
        'cliente_id' => $cliente->id
    ];
});