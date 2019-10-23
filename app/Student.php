<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey='stu_id';
    public function students()
    {
        return $this->belongsTo(Activity::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class,'sub_id');
    }
}
