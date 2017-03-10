<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfResource extends Model
{
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
}
