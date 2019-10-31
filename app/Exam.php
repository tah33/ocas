<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
	protected $fillable = [
        'question_id','time'
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
