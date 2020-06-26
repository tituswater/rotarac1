<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    protected $fillable = [
        'presidents_mail',
        'president_club',
        'tenure_end',
        'tenure_start',
    ];
}
