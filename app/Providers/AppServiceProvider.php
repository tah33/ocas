<?php

namespace App\Providers;

use App\Observers\SubjectObserver;
use App\Subject;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Student;
use App\Department;
use App\Observers\StudentObserver;
use App\Observers\DepartmentObserver;
class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        Schema::defaultStringLength(191);
    }

    public function boot()
    {
        Student::observe(StudentObserver::class);
        Department::observe(DepartmentObserver::class);
        Subject::observe(SubjectObserver::class);
    }
}
