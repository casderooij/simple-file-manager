<?php

use Faker\Generator as Faker;

$factory->define(App\FileFolder::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
