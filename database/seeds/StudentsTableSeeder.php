<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Student;
class StudentsTableSeeder extends Seeder
{

    public function run()
    {
        $gender = array(  'male' => 1, 'female'=>0);
        for($i=1;$i<=20;$i++)
        {
            $student=Student::create([
                'name' =>  Str::random(6),
                'email' =>  Str::random(6).'@gmail.com',
                'username' => Str::random(6),
                'password' => bcrypt('tanvir'),
                'phone' =>  rand(),
                'gender' => array_rand($gender,1),
                'image' => Str::random(6).'.jpg',
            ]);
        }
    }
}
