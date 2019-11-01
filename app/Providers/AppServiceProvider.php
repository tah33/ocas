<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Student;
use App\Observers\StudentObserver;
class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        Schema::defaultStringLength(191);
    }

    public function boot()
    {
        Student::observe(StudentObserver::class);
    }
}
