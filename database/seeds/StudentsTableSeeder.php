<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Student;
use App\Subject;
use App\Exam;
class StudentsTableSeeder extends Seeder
{

    public function run()
    {
        $gender = array('male','female');

        for($i=1;$i<=15;$i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'dob' =>  now(),
                'address' =>  Str::random(6),
                'phone' =>  Str::random(6),
                'gender' => $gender[array_rand($gender, 1)],
                'image' => Str::random(6).'.jpg',
            ]);
        }

    }
}
