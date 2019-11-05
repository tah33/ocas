<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyStudent extends Model
{
     public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
