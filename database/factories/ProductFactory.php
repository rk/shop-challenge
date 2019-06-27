<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, static function (Faker $faker) {
    return [
        'sku'   => strtoupper($faker->bothify('***************')),
        'title' => $faker->words(3, true),
        'price' => $faker->randomFloat(2, 0.99, 99.99),
        'stock' => random_int(0, 7),
    ];
});
