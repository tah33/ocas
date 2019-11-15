<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
        'subject_id','question','option1','option2','option3','option4','correct_ans',
    ];
    
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

}
