<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=['student_id','ans','marks','common','common_marks','time'];

	public $appends = ['answer'];

	protected $casts = ['ans' => 'array',
		'common' => 'array'
		];

	public function student()
	{
		return $this->belongsto(Student::class);
	}

	public function ranks()
	{
		return $this->hasMany(Rank::class);
	}

	public function getAnswerAttribute()
    {
        $answers  = json_decode($this->attributes['ans']);


        return $answers;
    }


}
