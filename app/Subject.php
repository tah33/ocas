<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable=['name','department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
