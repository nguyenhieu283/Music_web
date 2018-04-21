<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    //define database relationship
    public function music(){
        return $this->hasMany('App\Music');

    }

    public function single(){
        return $this->hasMany('App\Single');

    }

    public function national(){
        return $this->belongsTo('App\National');

    }

    public function mv(){
        return $this->hasMany('App\MV');

    }
}
