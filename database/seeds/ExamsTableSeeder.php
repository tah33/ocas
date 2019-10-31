<?php

use Illuminate\Database\Seeder;
use App\Exam;
class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <=10 ; $i++) { 
    		Exam::create([
                'question_id' =>rand(1,2),
            ]);
    	}
    	for ($i=1; $i <=5 ; $i++) { 
    		Exam::create([
                'question_id' =>3,
            ]);
    	}
    }
}
