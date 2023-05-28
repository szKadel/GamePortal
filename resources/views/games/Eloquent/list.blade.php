@extends('layout.main')

@section('content')

    <div class="row mt-3">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i> Gry
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <th>Lp</th>
                                <th>Title</th>
                                <th>Score</th>
                                <th>Category</th>
                                <th>Options</th>
                            </thead>
    @foreach ($movies as $movie)

            <tr>
                <td>{{ $movie->game_id }}</td> <td>{{ $movie->title }}</td>
                <td>{{ $movie->score??'?' }}/10</td> <td>{{ $movie->name }}</td>
                <td>
                    <a href="{{route('game.e.get',['id'=>$movie->game_id])}}">Show</a>
                </td>
            </tr>
    @endforeach
                        </table>

                    </div>
                    {{$movies->links()}}
                </div>

            </div>
    </div>

@endsection
