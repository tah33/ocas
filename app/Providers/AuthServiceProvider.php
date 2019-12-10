<?php

namespace App\Providers;

use App\Department;
use App\Policies\DepartmentPolicy;
use App\Policies\QuestionPolicy;
use App\Policies\SubjectPolicy;
use App\Question;
use App\Subject;
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
         Subject::class => SubjectPolicy::class,
         Question::class => QuestionPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
