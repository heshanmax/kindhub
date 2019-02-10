<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [


        'student_firstname'=>$faker->name,
        'student_lastname'=>$faker->name,
        'gender'=>$faker->randomLetter,
        'joined_year'=> $faker->year,
        'classroom_id'=> function () {

            return App\Classroom::inRandomOrder()->first()->id;
        },


    ];
});
