<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
    'title' => $faker->sentence(),
    'genre' => $faker->sentence(),
    'content' => $faker->text(),
    'featured_image' => $faker->imageUrl(750,300,'cats',true),
    ];
});
