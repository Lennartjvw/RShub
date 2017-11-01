@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="search_wrapper">

                </div>
                <div class="panel panel-default">

                    <h1>Edit Page:</h1>

                </div>

                <div class="container">

                    <form action="/user/{{ $user->id }}/edit" method="POST">
                        {!! method_field('patch') !!}

                        {{ csrf_field() }}

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name"><br>
v
                        <label for="name">Email:</label>
                        <input type="text" id="email" name="email"><br>

                        <input type="submit" value="Submit"><br>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
