<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Fee;
use Faker\Generator as Faker;

$factory->define(Fee::class, function (Faker $faker) {

    return [
        'fee_structure_id' => $faker->word,
        'payment' => $faker->word,
        'due' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
