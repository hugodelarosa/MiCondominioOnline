<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function membership()
    {
        return $this->belongsTo('App\Membership');
    }

    public function role()
    {
        return $this->hasOne('App\Role');
    }

    public function estates()
    {
        return $this->belongsToMany('App\Estate');
    }

    public function condos()
    {
        return $this->belongsToMany('App\Condo');
    }

    public function transactions()
    {
        return $this->belongsToMany('App\Transaction');
    }

    public function visitor()
    {
        return $this->hasMany('App\Visitor');
    }

    public function assets()
    {
        return $this->hasMany('App\Asset');
    }

    public function announcements()
    {
        return $this->hasMany('App\Announcement');
    }

    public function resources()
    {
        return $this->hasMany('App\Resource');
    }

    protected $fillable = ['name', 'lastname', 'email', 'phone', 'password'];
}
