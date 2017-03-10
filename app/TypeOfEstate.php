<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfEstate extends Model
{
    public function estates()
    {
        return $this->hasMany('App\Estate');
    }
}
