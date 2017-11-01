<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Review;
use App\Story;
use App\Http\Requests;


use Auth;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $reviews = Review::where("user_id", "=", $user->id)->get();
        $stories = Story::where("user_id", "=", $user->id)->get();

        if (Auth::user() == $user) {
            return view('users/index', compact('user', 'reviews', 'games', 'stories'));
        } else {
            return redirect('games');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (Auth::user() == $user) {
            return view('users/edit', compact('user'));
        } else {
            return redirect('games');
        }
    }

    public function update($id, Request $request){

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect('games');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $reviews = Review::where("user_id", "=", $user->id);
        $stories = Story::where("user_id", "=", $user->id);

        $reviews->delete();
        $stories->delete();
        $user->delete();

        return redirect('/');
    }

}
