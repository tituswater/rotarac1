<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_name',
        'member_email','member_club','member_phone'
       ];
}

