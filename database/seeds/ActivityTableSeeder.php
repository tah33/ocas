<?php

use Illuminate\Database\Seeder;
use App\Activity;
use App\Student;
use App\Test;
class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    public function run()
//    {
//        $stus=Student::all();
//        foreach ($stus as $key => $value) {
//            $list[]=$value->id;
//        }
//    	for ($i=0; $i <=15 ; $i++) {
//    		Activity::create([
//            'student_id'=>$list[array_rand($list, 1)],
//        	'login_time'=>now(),
//        	'logout_time'=>now(),
//        	'no_of_exams'=>rand(1,10)
//        ]);
//    	}
//    }
}
