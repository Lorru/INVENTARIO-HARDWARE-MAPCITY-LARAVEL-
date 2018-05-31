<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moves extends Model
{
    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function technical()
    {
        return $this->belongsTo(Technical::class);
    }
}
