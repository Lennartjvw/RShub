<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable  = [
        'game_id',
        'name',
        'review',
        'rating'
    ];
}
