<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable implements MustVerifyEmail
{
	use Notifiable;
	protected $fillable=['name','username','phone','password','email','gender','image'];

    public function students()
    {
        return $this->belongsTo(Activity::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
