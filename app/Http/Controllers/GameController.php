<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use mysql_xdevapi\Table;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
       // $result = DB::table('games')->limit(100);
        $result = DB::table('games')
            ->join('genres','games.genre_id','=','genres.id')
            ->select('games.id','title','score','name')
            ->get();

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

        $scoreStats  = DB::table('games')
            ->select('score')
            ->groupBy('score');



        return view('games.list',['movies'=>$result, 'stats'=>$stats, 'scoreCount'=>$scoreCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
        $movie = DB::table('games')->find($id);

        return view('games.get',['movies'=>$movie]);
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
