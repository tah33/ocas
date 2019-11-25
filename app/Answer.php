<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['student_id','question_id','given_ans'];

    protected $casts = ['given_ans' => 'array'];

    public function student()
    {
    	return $this->belongsTo(Student::class);
    }

	public function question()
    {
    	return $this->belongsTo(Question::class);
    }

}
