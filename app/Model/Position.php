<?php

namespace Interviewer\Model;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function questionnaire()
    {
        return $this->hasOne(Questionnaire::class);
    }
}
