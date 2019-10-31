<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
	use Notifiable;
	protected $fillable=['name','username','phone','password','interest','email','gender','image'];
    
    public function students()
    {
        return $this->belongsTo(Activity::class);
    }
    
    public function subject()
    {
        return $this->belongsTo(Subject::class,'interest');
    }
}
