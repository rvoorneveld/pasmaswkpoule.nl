<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

}
