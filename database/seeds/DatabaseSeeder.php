<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(ExamsTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
    }
}
