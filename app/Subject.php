<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable=['name','slug','logo'];

    public function rule()
    {
        return $this->hasOne(Rule::class);
    }

    public function common()
    {
        return $this->hasOne(Common::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function commons()
    {
        return $this->hasMany(Common::class);
    }

    public function rank()
    {
        return $this->hasOne(Rank::class);
    }
}
