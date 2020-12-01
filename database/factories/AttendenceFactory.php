<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attendence;
use Faker\Generator as Faker;

$factory->define(Attendence::class, function (Faker $faker) {

    return [
        'student_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'subject_id' => $faker->randomDigitNotNull,
        'teacher_id' => $faker->randomDigitNotNull,
        'attendace_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
