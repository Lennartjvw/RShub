<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;
use App\Review;

class ReviewsController extends Controller
{
    public function index()
    {
        return view('reviews.index');
    }

    public function show(Game $game)
    {
        return view('reviews.show', compact('game'));
    }

    public function create(Game $game)
    {
        return view('reviews.create', compact('game'));
    }

    public function store()
    {

        Review::create([

            'game_id' => request('game_id'),
            'name' => request('name'),
            'review' => request('review'),
            'rating' => request('rating')

        ]);

        return redirect('/');
    }
}
