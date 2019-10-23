<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $primaryKey='ex_id';
    public function students()
    {
        return $this->hasMany(Student::class,'stu_id');
    }
}
