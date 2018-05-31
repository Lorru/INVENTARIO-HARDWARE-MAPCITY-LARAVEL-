<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function hardware()
    {
        return $this->hasMany(Hardware::class);
    }
}
