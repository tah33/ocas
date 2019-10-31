<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Department;
use App\Student;
class SubjectsTableSeeder extends Seeder
{

    public function run()
    {
        $cse=Department::where('name','Bachelor of Computer Science and Engineering')->first();
        $eee=Department::where('name','Bachelor of Electrical & Electronics Engineering')->first();
        $bba=Department::where('name','Bachelor of Business Administration')->first();
        DB::table('subjects')->insert([
            ['department_id' => $cse->id,'name' => 'Software'],
        ['department_id' => $cse->id,'name' => 'Networking']
        ]);
        DB::table('subjects')->insert([
            ['department_id' => $eee->id,'name' => 'Electronics'],
        ['department_id' => $eee->id,'name' => 'Communication']
        ]);
        DB::table('subjects')->insert([
            ['department_id' => $bba->id,'name' => 'accounting and finance'],
        ['department_id' => $bba->id,'name' => 'human resource management'],
        ['department_id' => $bba->id,'name' => 'management'],
        ['department_id' => $bba->id,'name' => 'marketing']
        ]);
    }
}
