<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public function typeOfMembership()
    {
        return $this->hasOne('App\TypeOfMembership');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
