<?php

use Illuminate\Database\Seeder;

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
    }
}
