<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = [
        'name','slug','minimum','subject_id','range','subjects','total'
    ];
    protected $casts = [
        'subjects' => 'array'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function condition()
    {
        return $this->hasOne(Condition::class);
    }
    
}