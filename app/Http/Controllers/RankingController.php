<?php

namespace App\Http\Controllers;
use App\UserScore as Ranking;

class RankingController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the complete ranking
     */
    public function index()
    {
        return view('ranking', ['ranking' => Ranking::orderBy('points', 'desc')->get()]);
    }

}
