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
    	$mytime = Carbon\Carbon::now('Asia/Dhaka');
    	$mytime->add('30 minutes')->calendar();
		$mytime->toDateTimeString();
        for($i=0;$i<=20;$i++)
        {
        	Exam::create([
        		'marks'=>rand(1,20),
        		'time'=>$mytime
        	]);
        }
    }
}
