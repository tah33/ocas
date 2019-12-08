<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Department;
use App\Student;
class SubjectsTableSeeder extends Seeder
{

    public function run()
    {
        $subjects = array(
            array('name' => 'Mathematics','slug'=>'Math'),
            array('name' => 'Chemistry','slug' => 'Chemistry'),
            array('name' => 'Physics','slug' => 'Physics'),
            array('name' => 'Information Communication & Technology','slug' => 'ICT'),
            array('name' => 'English','slug' => 'English'),
            array('name' => 'General Knowledge','slug' => 'GK'),
            array('name' => 'Marketing','slug' => 'Marketing'),
            array('name' => 'Finance','slug' => 'Finance'),
            array('name' => 'Management','slug' => 'Management'),
            array('name' => 'Accounting','slug' => 'Accounting'),
            array('name' => 'Biology','slug' => 'Biology'),
            array('name' => 'HomoScience','slug' => 'HomoScience'),
            array('name' => 'Agriculture','slug' => 'Agriculture'),
        );
        Subject::insert($subjects);
    }
}
