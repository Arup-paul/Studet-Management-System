<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FeeStructure;
use Faker\Generator as Faker;

$factory->define(FeeStructure::class, function (Faker $faker) {

    return [
        'semester_id' => $faker->word,
        'course_id' => $faker->word,
        'level_id' => $faker->word,
        'admissionsFee' => $faker->word,
        'semesterFee' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
