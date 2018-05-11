<?php

namespace App;namespace App;

use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{

    protected $table = 'users_score';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'score', 'userId',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }

}
