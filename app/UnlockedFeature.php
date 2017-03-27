<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnlockedFeature extends Model
{
    public function typeOfMembership()
    {
        return $this->belongsTo('App\TypeOfMembership');
    }
}
