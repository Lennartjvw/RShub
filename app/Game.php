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

    public function stories(){
        return $this->hasMany(Story::class);
    }

    public function addStory(){
        $this->sories()->create(compact('story'));
    }


}
