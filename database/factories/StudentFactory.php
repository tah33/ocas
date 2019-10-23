<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Student::class, function (Faker $faker) {
    $gender=array('male','female');
    return [
        'name' => Str::random(6),
        'username' => Str::random(6),
        'email' => Str::random(6).'@gmail.com',
        'password' => bcrypt(Str::random(6)) ,
        //'interest' => rand(1,20),
        'phone' => rand() ,
        'gender' => $gender[array_rand($gender)],
        'image' => Str::random(6),
        ];
});
