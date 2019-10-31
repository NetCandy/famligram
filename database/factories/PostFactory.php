<?php

/** @var Factory $factory */

use App\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Post::class, function (Faker $faker) {

    $creationDate = Carbon::now()
        ->subDays(rand(0, 7))
        ->subMinutes(rand(1, 55))->format('Y-m-d H:i:s');

    return [
        'text' => $faker->paragraph(),
        'created_at' => $creationDate,
        'updated_at' => $creationDate
    ];
});
