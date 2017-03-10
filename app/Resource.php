<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function typeOfResource()
    {
        return $this->belongsTo('App\TypeOfResource');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
