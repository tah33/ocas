<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Tanvir',
            'email' => 'tahmedhera@gmail.com',
            'username' => 'tanvir',
            'password' => bcrypt('tanvir'),
        ]);
    }
}