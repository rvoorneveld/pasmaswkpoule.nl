<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predictions extends Model
{

    protected $fillable = [
        'gameId', 'userId', 'goalsHome', 'goalsAway', 'cardsYellow', 'cardsRed',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }

}
