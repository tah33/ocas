<?php

use Illuminate\Database\Seeder;
use App\Activity;
class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <=20 ; $i++) { 
    		Activity::create([
        	'login_time'=>now(),
        	'logout_time'=>now(),
        	'no_of_exams'=>rand(),
        ]);
    	}
    }
}
