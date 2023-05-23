@extends('layout.main')

@section('content')

    <div class="row mt-3">
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Count Games</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stats['count']}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Count Games with score GT 5</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stats['countScoreGtFive']}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-star-half-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Avg</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stats['avg']}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-half fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Max</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$stats['max']}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    @foreach ($movies as $user)

            <tr>
                <td>{{ $user->id }}</td> <td>{{ $user->title }}</td>
                <td>{{ $user->score??'?' }}/10</td> <td>{{ $user->genre_id }}</td>
                <td>
                    <a href="{{route('get.game',['id'=>$user->id])}}">Show</a>
                </td>
            </tr>
    @endforeach
                        </table>
                    </div>
                </div>
            </div>

@endsection
