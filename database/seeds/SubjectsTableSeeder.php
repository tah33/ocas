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
            array('name' => 'Software'),
            array('name' => 'Networking'),
            array('name' => 'Electronics'),
            array('name' => 'Communication'),
            array('name' => 'ACCOUNTING AND FINANCE'),
            array('name' => 'HUMAN RESOURCE MANAGEMENT (HRM)'),
            array('name' => 'MANAGEMENT'),
            array('name' => 'MARKETING'),
        );
        Subject::insert($subjects);
    }
}
