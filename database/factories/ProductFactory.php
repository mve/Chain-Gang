<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
        'price' => $faker->randomNumber(2),
        'gears' => $faker->numberBetween(1, 24),
        'frame' => $faker->numberBetween(1, 24),
        'brand' => $faker->lastName,
        'color' => $faker->colorName,
        'year' => $faker->year,

    ];
});
