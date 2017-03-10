<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permission()
    {
        return $this->hasOne('App\Permission');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
