@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="search_wrapper">

                </div>
                <div class="panel panel-default">
                    <h1>Your Profile:</h1>
                    <li>Name: {!! $user->name !!}</li>
                    <li>Email: {!! $user->email !!}</li>
                </div>

                <hr>
                <h1>All reviews written by you:</h1>
                @foreach($reviews as $review)
                    <li>Game ID: {{ $review->game_id }}</li>
                    <li>Review: {{ $review->review }}</li>
                    <li>Rating: {{ $review->rating }}</li>
                    <hr>
                @endforeach

                <h1>All stories written by you:</h1>
                @foreach($stories as $story)
                    <li>Game ID: {{ $story->game_id }}</li>
                    <li>Review: {{ $story->story }}</li>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
@endsection