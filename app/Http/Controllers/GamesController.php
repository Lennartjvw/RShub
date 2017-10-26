<?php

namespace App\Http\Controllers;

use App\Game;
//use App\Review;

class GamesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', compact('games', 'reviews'));
    }

    public function show(Game $game) {
//        $reviews = Review::all();
        return view('games.show', compact('game', 'reviews'));
    }


    public function add(){
        return view('games.add');
    }

    public function store(Game $game){

        Game::create([
            'name' => request('name'),
            'release_date' => request('release_date'),
            'summary' => request('summary'),
            'developer' => request('developer'),
            'image_url' => request('image_url'),
            'trailer_url' => request('trailer_url')
        ]);

        return redirect('/');

    }
}
