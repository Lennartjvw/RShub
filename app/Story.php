<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable  = [
        'game_id',
        'completed',
        'story',
        'image_url',
        'video_url'

    ];

    public function game(){
        return $this->belongsTo(Game::class);
    }
}
