<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey='dept_id';
    public function students()
    {
        return $this->hasMany(Student::class,'stu_id');
    }
}
