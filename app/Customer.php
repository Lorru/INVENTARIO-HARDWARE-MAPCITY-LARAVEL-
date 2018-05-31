<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function moves()
    {
        return $this->hasMany(Moves::class);
    }

    public function dependence()
    {
        return $this->belongsTo(Dependence::class);
    }
}
