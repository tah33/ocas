<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=['student_id','ans','marks','time'];

	protected $casts = ['ans' => 'array'];
	public function student()
	{
		return $this->belongsto(Student::class);
	}
    
}
