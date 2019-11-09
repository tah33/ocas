<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = [
        'name','slug','minimum','subject_id','range'
    ];
    protected $casts = [
        'conditions' => 'array'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    public function condition()
    {
        return $this->hasOne(Condition::class);
    }
    
}