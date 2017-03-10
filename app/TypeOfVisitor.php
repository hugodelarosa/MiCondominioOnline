<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfVisitor extends Model
{
    public function visitor()
    {
        return $this->belongsTo('App\Visitor');
    }
}
