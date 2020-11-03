@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="text-center">
            <h3>{{ Auth::user()->name }}さんのタスク</h3>
        </div>
        <div>
            @include('tasks.tasks')
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection