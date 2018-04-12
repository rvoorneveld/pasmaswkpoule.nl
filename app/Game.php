<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function homeCountry()
    {
        return $this->hasOne(Country::class, 'id', 'homeId');
    }

    public function awayCountry()
    {
        return $this->hasOne(Country::class, 'id', 'awayId');
    }

}
