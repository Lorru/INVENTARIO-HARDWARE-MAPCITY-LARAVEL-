<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependence extends Model
{
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
