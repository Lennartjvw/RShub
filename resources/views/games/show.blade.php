@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <li>Name: {{ $games->name }}</li>
                    <li>Release date: {{ $games->release_date }}</li>
                    <li>Summary: {{ $games->summary }}</li>
                    <li>Developer: {{ $games->developer }}</li>
                    <li>
                        <img src="{{ $games->image_url }}" alt="W3Schools.com" width="200px">
                    </li>
                    <a href="{{ url('/games') }}"><p>Go back</p></a>

                </div>
            </div>
        </div>
    </div>
@endsection
