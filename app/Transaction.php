<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function typeOfTransaction()
    {
        return $this->hasOne('App\TypeOfTransaction');
    }

    public function receipt()
    {
        return $this->hasOne('App\Receipt');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
