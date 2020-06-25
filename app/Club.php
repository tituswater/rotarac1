<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'club_name',
        'state_id',
        'image',
        'sponsor',
        'chartered',
       ];
}
