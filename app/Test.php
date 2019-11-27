<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=['student_id','ans','marks','common','common_marks','time'];

	protected $casts = ['ans' => 'array',
		'common' => 'array'
		];
	public function student()
	{
		return $this->belongsto(Student::class);
	}
    
}
