<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class National extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    //define database relationship
    public function music(){
        return $this->hasMany('App\Music');

    }

    public function type(){
        return $this->hasMany('App\Type');

    }

    public function single(){
        return $this->hasMany('App\Single');

    }

    public function mv(){
        return $this->hasMany('App\MV');
    }
}
