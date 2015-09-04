<?php

namespace Interviewer\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
