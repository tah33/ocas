<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $fillable = [
        'name','slug','minimum','conditions'
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
    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
