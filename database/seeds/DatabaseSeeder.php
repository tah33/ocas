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
        $this->call(TestsTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(BiologySeeder::class);
        $this->call(Chemistryseeder::class);
        $this->call(ICTSeeder::class);
        $this->call(Mathseeder::class);
        $this->call(QuestionsTableSeeder::class);

    }
}

