<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Story;

class StoriesController extends Controller
{
    public function create(Game $game)
    {
        return view('stories.create', compact('game'));
    }

    public function store(Game $game){

        Story::create([
            'game_id' => request('game_id'),
            'completed' => request('completed'),
            'story' => request('story'),
            'image_url' => request('image_url'),
            'video_url' => request('video_url')
        ]);

        return redirect('/');

    }

}
