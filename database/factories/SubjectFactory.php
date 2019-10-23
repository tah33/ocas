<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        $subjects = array(
            array('name' => 'Software'),
            array('name' => 'Networking'),
            array('name' => 'BBA Finance'),
            array('name' => 'BBA Human Resource'),
            array('name' => 'BBA in Banking and Insurance'),
            array('name' => 'BBA Marketing'),
            array('name' => 'Power system'),
            array('name' => 'power station'),
            array('name' => 'Switchgate'),
        )
    ];
});
