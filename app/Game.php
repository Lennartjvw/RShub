<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function addReview($review){
        $this->reviews()->create(compact('review'));

    }
}
