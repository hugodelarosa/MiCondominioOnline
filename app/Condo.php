<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Condo extends Model
{
    protected $fillable = [
        'name', 'direction'
    ];
    
    public function estates()
    {
        return $this->belongsToMany('App\Estate');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
