<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
        'subject_id','question','options','correct_ans',
    ];
    protected $casts = [
        'correct_ans' => 'array',
        'options'=> 'array',

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
