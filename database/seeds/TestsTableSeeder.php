<?php

use Illuminate\Database\Seeder;
use App\Test;
class TestsTableSeeder extends Seeder
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
        for($i=1;$i<=15;$i++)
        {
            $student=Test::create([
                'student_id' =>  rand(1,15),
                'marks' =>  rand(1,15),
                'time' =>  $mytime
            ]);
        }

    }
}
