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
                                <th>Tytuł</th>
                                <th>Ocena</th>
                                <th>Kategoria</th>
                                <th>Opcje</th>
                            </thead>
    @foreach ($movies as $user)

            <tr>
                <td>{{ $user->id }}</td> <td>{{ $user->title }}</td>
                <td>{{ $user->scre??0 }}/10</td> <td>{{ $user->genre_id }}</td>
                <td>
                    <a href="">Zobacz</a>
                    <a href="">Modyfikuj</a>
                    <a href="">Usuń</a>
                </td>
            </tr>
    @endforeach
                        </table>
                    </div>
                </div>
            </div>
    </ul>
@endsection
