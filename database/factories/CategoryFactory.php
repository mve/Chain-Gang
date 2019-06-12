<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement($array = array ('Herenfiets','Damesfiets','Kinderfiets', 'Mountainbike')),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});
