<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    public function moves()
    {
        return $this->hasMany(Moves::class);
    }
}
