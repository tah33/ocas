<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyStudent extends Model
{
	protected $fillable=['student_id','token'];
     public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
