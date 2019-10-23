<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
