<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rule extends Model
{
    protected $fillable=['subject_id','department_id','range'];

    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
    
    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }
}
