<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,SoftDeletes;
    
    protected $guard='student';

	protected $fillable=['name','username','phone','password','email','gender','image'];

    public function activities()
    {
        return $this->belongsTo(Activity::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
    
    public function getGenderNameattribute()
    {
        return ucfirst($this->gender);
    }
}
