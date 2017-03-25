<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfTransaction extends Model
{
    protected $fillable = [
        'name', 'income_outcome'
    ];

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
