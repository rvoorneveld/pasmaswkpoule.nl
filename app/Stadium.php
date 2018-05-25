<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{

    protected $table = 'stadiums';

    public function matches()
    {
        return $this->hasMany(Games::class, 'stadiumId', 'id');
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id','cityId');
    }

}
