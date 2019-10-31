<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
        'question','option1','option2','option3','option4','given_ans','correct_ans',
    ];
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
