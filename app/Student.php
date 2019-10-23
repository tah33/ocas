<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function students()
    {
        return $this->belongsTo(Activity::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
