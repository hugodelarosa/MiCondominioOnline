<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfState extends Model
{
    public function estate()
    {
        return $this->hasMany('App\Estate');
    }
}
