<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Game;
use App\Predictions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Awjudd\FeedReader\FeedReader;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'todaysGames' => Game::where('date', Carbon::today()->toDateString())->get()->all(),
            'upcommingGames' => Game::limit(5)->get(),
            'showFillPredictionsAlert' => Predictions::where('userId', Auth::id())->count() !== Game::count(),
            'feed' => (new FeedReader())->read('https://www.voetbalkrant.com/nl/rss/nieuws/competities/wk-2018')->get_items(),
        ]);
    }

}
