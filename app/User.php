<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function membership()
    {
        return $this->belongsTo('App\Membership');
    }

    public function role()
    {
        return $this->hasOne('App\Role');
    }

    public function condos()
    {
        return $this->belongsToMany('App\Estate');
    }
}
