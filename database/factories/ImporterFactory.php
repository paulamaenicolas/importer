<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Importer;
use Faker\Generator as Faker;

$factory->define(Importer::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'first_name' => $faker->name,
        'second_name' => $faker->lastName
    ];
});
