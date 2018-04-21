<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = [
        'User',
        'Pass',
        'Name',
        'Email',
        'Date',

    ];
}
