<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'sub_text' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'name' => $faker->imageUrl($width = 640, $height = 480),
        'location' => null,
        'file_extension' => 'jpeg',
        'file_folder_id' => 1
    ];
});
