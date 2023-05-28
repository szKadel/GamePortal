<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EloquentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $result = DB::table('games')
            ->select('game_id','title','name','score','publisher')
            ->join('genres','genre_id','=','id')
            ->simplepaginate(100);

        $stats = [
            'count' => DB::table('games')->count(),
            'countScoreGtFive' => DB::table('games')->where('score','>',5)->count(),
            'max' => DB::table('games')->max('score')??0,
            'min' => DB::table('games')->min('score')??0,
            'avg' => DB::table('games')->avg('score')??0,
        ];

        return view('games.Eloquent.list',['movies'=>$result, 'stats'=>$stats]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    public function dashboard()
    {

        $scoreCount = DB::table('games')
            ->select(DB::raw('count(*) as count'), 'score')

            ->groupBy('score')
            ->get();

        $stats = [
            'count' => DB::table('games')->count(),
            'countScoreGtFive' => DB::table('games')->where('score','>',5)->count(),
            'max' => DB::table('games')->max('score')??0,
            'min' => DB::table('games')->min('score')??0,
            'avg' => DB::table('games')->avg('score')??0,
        ];

        return view('games.Eloquent.dashboard',['stats'=>$stats,'scoreCount'=>$scoreCount]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game, $id):View
    {
        $movie = DB::table('games')->where('game_id','=',$id)->get();



        return view('games.Eloquent.get',['movies'=>$movie[0]??[]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
