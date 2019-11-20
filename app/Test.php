<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=['student_id','marks','time'];
	public function student()
	{
		return $this->belongsto(Student::class);
	}
    
}
