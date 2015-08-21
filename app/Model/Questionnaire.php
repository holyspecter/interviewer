<?php

namespace Interviewer\Model;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
