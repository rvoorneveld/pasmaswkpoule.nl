<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Feeds;

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
            'feed' => $this->getFeedData(),
        ]);
    }

    protected function getFeedData(): array
    {
        return [
            'title' => ($feed = Feeds::make('http://www.feedforall.com/sample.xml'))->get_title(),
            'permalink' => $feed->get_permalink(),
            'items' => $feed->get_items(),
        ];
    }

}
