<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $fillable = [
        'id',
        'name',
        'single',
        'type',
        'national',
        'description',
    ];

    //define database relationship
    public function national(){
        return $this->belongsTo('App\National');

    }

    public function type(){
        return $this->belongsTo('App\Type');

    }

    public function single(){
        return $this->belongsTo('App\Single');

    }

}
