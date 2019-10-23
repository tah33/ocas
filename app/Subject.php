<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey='sub_id';
    public function department()
    {
        return $this->belongsTo(Department::class,'dept_id');
    }
    public function students()
    {
        return $this->hasMany(Student::class,'interest');
    }
}
