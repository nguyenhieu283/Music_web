<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Single extends Model
{
    protected $fillable = [
        'id',
        'name',
        'national',
        'age',
        'address',
        'description',
    ];

    //define database relationship
    public function music(){
        return $this->hasMany('App\Music');

    }

    public function type(){
        return $this->belongsTo('App\Type');

    }

    public function national(){
        return $this->belongsTo('App\National');

    }

    public function mv(){
        return $this->hasMany('App\MV');

    }
}
