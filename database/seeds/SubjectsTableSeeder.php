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
            array('name' => 'Math'),
            array('name' => 'Chemistry'),
            array('name' => 'Physics'),
            array('name' => 'ICT'),
            array('name' => 'English'),
            array('name' => 'General Knowledge'),
            array('name' => 'Marketting'),
            array('name' => 'Finance'),
            array('name' => 'Management'),
            array('name' => 'Accounting'),
            array('name' => 'Biology'),
            array('name' => 'HomoScience'),
            array('name' => 'Agriculture'),
        );
        Subject::insert($subjects);
    }
}
