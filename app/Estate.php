<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    public function typeOfEstate()
    {
        return $this->belongsTo('App\TypeOfEstate');
    }

    public function condos()
    {
        return $this->belongsToMany('App\Condo');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
