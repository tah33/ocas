<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
	protected $fillable = [
        'student_id', 'test_id', 'login_time','logout_time'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
