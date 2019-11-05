<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = [
        'name'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
