<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
        'student_id', 'test_id', 'login_time','logout_time','no_of_tests'
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
