<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    public function moves()
    {
        return $this->hasMany(Moves::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
