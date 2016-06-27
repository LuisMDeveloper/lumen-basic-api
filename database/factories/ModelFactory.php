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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Pin::class, function ($faker) {
    return [
        'description' => $faker->text(150),
        'like_count' => 0,
        'link' => $faker->url,
        'image_url' => $faker->imageUrl(640, 480),
        'image_width' => 640,
        'image_height' => 480,
    ];
});
