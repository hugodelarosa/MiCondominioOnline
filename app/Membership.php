<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public function typeOfMembership()
    {
        return $this->hasOne('App\TypeOfMembership');
    }
}
