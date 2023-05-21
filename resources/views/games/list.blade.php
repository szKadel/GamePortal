@extends('layout.main')

@section('content')
    <ul>
    @foreach ($movies as $user)

        <li>{{ $user->id }} - {{ $user->title }}</li>

    @endforeach
    </ul>
@endsection
