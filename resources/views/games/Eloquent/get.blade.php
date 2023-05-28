@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    <div>Games List: <a href="{{ route('game.e.list') }}">Link</a></div>
@endsection

@section('content')
    @if(!empty($movies))

    <div class="card">
        <h5 class="card-header">{{ $movies->title}}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $movies->game_id  }}</li>
                <li>Title: {{ $movies->title  }}</li>
                <li>Score: {{ $movies->score ?? 0  }}</li>
                <li>Gender: {{ $movies->genre_id  }}</li>
            </ul>

            <a href="{{ route('game.e.list') }}" class="btn btn-light">Games List</a>
        </div>
    </div>
    @else
    <h5> This Game does not exist</h5>
    @endif
@endsection
