<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'club_name',
        'state_id',
        'sponsor',
        'chartered',
        'meeting_day',
        'meeting_time',
        'meeting_venue',
        'type',
        'club_acronym',

    ];
}
