<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $fillable = ['subject_id','test_id','marks'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
