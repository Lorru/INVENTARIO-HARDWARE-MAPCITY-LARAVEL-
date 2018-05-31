<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }
}
