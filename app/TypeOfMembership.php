<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfMembership extends Model
{
    public function unlockedFeature()
    {
        return $this->hasOne('App\UnlockedFeature');
    }
}
