<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public function stadium()
    {
        return $this->hasOne(Stadium::class, 'cityId', 'id');
    }

}
