<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween($min = 1000, $max = 1000000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 2, $max = 30)
    ];
});
