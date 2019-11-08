<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\Subject;
class DepartmentsTableSeeder extends Seeder
{

    public function run()
    {
        $departments = array(
            array('slug'=>'BBA','name' => 'Bachelor of Business Administration','minimum' =>50),
            array('slug'=>'CSE','name' => 'Bachelor of Computer Science and Engineering','minimum' =>60),
            array('slug'=>'SCE','name' => 'Bachelor of Science in Civil Engineering','minimum' =>60),
            array('slug'=>'SME','name' => 'Bachelor of Science in Mechanical Engineering','minimum' =>60),
            array('slug'=>'EEE','name' => 'Bachelor of Electrical & Electronics Engineering','minimum' =>60),
            array('slug'=>'BSN','name' => 'Bachelor of Science in Nursing','minimum' =>40),
            array('slug'=>'BATHM','name' => 'Bachelor of Arts in Tourism and Hospitality Management','minimum' =>40),
            array('slug'=>'BAG','name' => 'Bachelor of Science in Agriculture','minimum' =>45),
            array('slug'=>'BAE','name' => 'Bachelor of Arts in Economics','minimum' =>40),
        );
        Department::insert($departments);
        
    }
}