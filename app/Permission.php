<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
