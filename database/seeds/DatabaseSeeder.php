<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
       // $this->call(SubjectsTableSeeder::class);
        //$this->call(StudentsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $users = factory(App\Subject::class)
            ->create()
            ->each(function ($sub) {
                $sub->students()->save(factory(App\Student::class)->make());
            });

    }
}
