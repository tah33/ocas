<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    protected $fillable = ['subject_id'];

    public function subject()
    {
    	return $this->belongsTo(Subject::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'subject_id','subject_id');
    }
}
