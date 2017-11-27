<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'category_id' => 0,
        'user_id' => 1,
        'slug' => $faker->slug,
        'title' => $faker->sentence,
        'subtitle' => $faker->sentence,
        'content' => $faker->paragraph,
        'image_url' => $faker->imageUrl()
    ];
});
