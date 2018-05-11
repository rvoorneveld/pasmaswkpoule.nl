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

    public function gameType()
    {
        return $this->hasOne(Gametypes::class, 'id', 'typeId');
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class, 'id', 'stadiumId');
    }

}
