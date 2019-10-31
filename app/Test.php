<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable=['student_id','exam_id','marks','time'];
    
}
