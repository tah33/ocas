<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Department;
class SubjectsTableSeeder extends Seeder
{

    public function run()
    {
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
        );
        Subject::insert($subjects);
    }
}
