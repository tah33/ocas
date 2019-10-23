<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\Subject;
class DepartmentsTableSeeder extends Seeder
{

    public function run()
    {
        $departments = array(
            array('name' => 'Bachelor of Business Administration'),
            array('name' => 'Bachelor of Computer Science and Engineering'),
            array('name' => 'Bachelor of Science in Civil Engineering'),
            array('name' => 'Bachelor of Science in Mechanical Engineering'),
            array('name' => 'Bachelor of Electrical & Electronics Engineering'),
            array('name' => 'Bachelor of Science in Nursing'),
            array('name' => 'Bachelor of Arts in Tourism and Hospitality Management'),
            array('name' => 'Bachelor of Science in Agriculture'),
            array('name' => 'Bachelor of Arts in Economics'),
        );
        Department::insert($departments);
        
    }
}