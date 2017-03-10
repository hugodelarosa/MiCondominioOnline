<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function typeOfTransaction()
    {
        return $this->hasOne('App\TypeOfTransaction');
    }
}
