<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $primaryKey='ac_id';
    public function students()
    {
        return $this->hasMany(Student::class,'stu_id');
    }
    public function exams()
    {
        return $this->hasMany(Exam::class,'ex_id');
    }
}
