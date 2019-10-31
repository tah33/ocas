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
        $gender = array(  'male' => 1, 'female'=>0);
        $soft=Subject::where('name','software')->first();
        $net=Subject::where('name','networking')->first();
        $com=Subject::where('name','communication')->first();
        for($i=1;$i<=5;$i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'phone' =>  rand(),
                'interest' =>  $soft->id,
                'gender' => array_rand($gender,1),
                'image' => Str::random(6).'.jpg',
            ]);
        }
        for($i=1;$i<=5;$i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'phone' =>  rand(),
                'interest' =>  $net->id,
                'gender' => array_rand($gender,1),
                'image' => Str::random(6).'.jpg',
            ]);
        }
        for($i=1;$i<=5;$i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'phone' =>  rand(),
                'interest' =>  $com->id,
                'gender' => array_rand($gender,1),
                'image' => Str::random(6).'.jpg',
            ]);
        }
        
    }
}
