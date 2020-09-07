<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween($min = 10, $max = 100),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween($min = 0, $max = 15)
    ];
});
