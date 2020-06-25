<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $fillable = [
        'member_email',
        'office_held',
        'from',
        'to',


       ];
}
