<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable=['subject_id','department_id','total'];

    protected $casts=['subject_id' => 'array'];
    
    public function department()
    {
    	return $this->belongsTo(Department::class);
    }
    
    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }
    /*public function getSubjectNameAttribute($subject)
    {
        foreach ($this->subject_id as $key => $subject) {
            $list[]=$subject;
            $sub=$this->subject()->where('id',$subject)->first();
        }
        return $sub;
    }*/

}
