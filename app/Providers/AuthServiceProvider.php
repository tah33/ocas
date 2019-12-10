<?php

namespace App\Providers;

use App\Department;
use App\Policies\DepartmentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Activity;
use App\Policies\ActivityPolicy;
use App\Student;
use App\Policies\StudentPolicy;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
         Activity::class => ActivityPolicy::class,
         Student::class => StudentPolicy::class,
         Department::class => DepartmentPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
