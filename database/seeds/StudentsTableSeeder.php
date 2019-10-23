<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Student;
class StudentsTableSeeder extends Seeder
{

    public function run()
    {
        for($i=1;$i<=20;i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'phone' =>  rand(),
                'gender' => Str::random(6),
                'image' => bcrypt('tanvir'),
            ]);
            $student->subject()->save($student);
        }
    }
}
