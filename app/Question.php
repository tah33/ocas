<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey='ques_id';
    public function exams()
    {
        return $this->hasMany(Exam::class,'ex_id');
    }
}
