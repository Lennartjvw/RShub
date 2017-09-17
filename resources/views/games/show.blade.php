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

                </div>
            </div>
        </div>
    </div>
@endsection
