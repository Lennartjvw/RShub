@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <li>Name: {{ $game->name }}</li>
                    <li>Release date: {{ $game->release_date }}</li>
                    <li>Summary: {{ $game->summary }}</li>
                    <li>Developer: {{ $game->developer }}</li>
                    <li>
                        <img src="{{ $game->image_url }}" alt="Image not found" width="200px">
                    </li>

                    <li><a href="{{ url('/games/'.$game->id.'/create-review') }}">Create a review</a> </li>
                    <li><a href="{{ url('/games/'.$game->id.'/create-story') }}">Create a story</a> </li>

                    <a href="{{ url('/games') }}"><p>Go back</p></a>

                </div>

                <h1>All reviews for this game:</h1>
                <hr>
                @foreach($game->reviews as $review)
                    <li>{{ $game->name }}</li>
                    <li>{{ $review->review }}</li>
                    <li>{{ $review->rating}}</li>
                    <hr>
                @endforeach

                <h1>All stories for this game:</h1>
                <hr>
                @foreach($game->stories as $story)
                    <li>{{ $game->name }}</li>
                    <li>{{ $story->story }}</li>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection
