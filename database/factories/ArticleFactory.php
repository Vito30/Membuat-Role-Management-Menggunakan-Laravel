<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'uid' => rand(1,3),
        'title' => $faker->sentence(4),
        'body' => $faker->paragraph(4),
        'publish' => rand(0,1)
    ];
});
