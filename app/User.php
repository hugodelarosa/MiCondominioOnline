<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function membership()
    {
        return $this->hasMany('App\Membership');
    }

    public function role()
    {
        return $this->hasOne('App\Role');
    }
}
