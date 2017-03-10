<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    public function typeOfEstate()
    {
        return $this->belongsTo('App\TypeOfEstate');
    }
}
