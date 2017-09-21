<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable  = [
        'game_id',
        'review',
        'rating'
    ];

    public function game(){
        return $this->belongsTo(Game::class);
    }

}
