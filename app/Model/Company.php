<?php

namespace Interviewer\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
