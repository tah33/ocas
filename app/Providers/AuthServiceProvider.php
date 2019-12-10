<?php

namespace App\Providers;

use App\Common;
use App\Department;
use App\Exam;
use App\Policies\CommonPolicy;
use App\Policies\DepartmentPolicy;
use App\Policies\ExamPolicy;
use App\Policies\QuestionPolicy;
use App\Policies\SubjectPolicy;
use App\Policies\TestPolicy;
use App\Question;
use App\Subject;
use App\Test;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Activity;
use App\Policies\ActivityPolicy;
use App\Student;
use App\Policies\StudentPolicy;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
         Activity::class    => ActivityPolicy::class,
         Common::class      => CommonPolicy::class,
         Department::class  => DepartmentPolicy::class,
         Exam::class        => ExamPolicy::class,
         Question::class    => QuestionPolicy::class,
         Student::class     => StudentPolicy::class,
         Subject::class     => SubjectPolicy::class,
         Test::class        => TestPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
