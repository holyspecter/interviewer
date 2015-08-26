<?php

namespace Interviewer\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'description',
        'homepage'
    ];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
