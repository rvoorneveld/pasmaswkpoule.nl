<?php

namespace App\Http\Controllers;

use App\User;
use App\UserScore;
use Illuminate\Support\Facades\Auth;
use App\Game;
use App\Predictions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Awjudd\FeedReader\FeedReader;
use Illuminate\Support\Facades\File;

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
            'todaysGames' => Game::where('date', $date = Carbon::today()->toDateString())->get()->all(),
            'upcommingGames' => Game::where('date', '>', $date)->orderBy('date', 'asc')->limit(5)->get(),
            'showFillPredictionsAlert' => Predictions::where('userId', $userId = Auth::id())->count() !== Game::count(),
            'lastPredictionsScore' => UserScore::where('userId', $userId)->orderBy('date', 'desc')->first(),
            'feed' => (new FeedReader())->read('https://www.voetbalkrant.com/nl/rss/nieuws/competities/wk-2018')->get_items(),
            'images' => $this->getRandomCarouselImages(),
        ]);
    }

    protected function getRandomCarouselImages($total = 5)
    {
        if (false === empty($images = File::files("{$_SERVER['DOCUMENT_ROOT']}/images/carousel"))) {
            shuffle($images);
            $images = array_slice($images, 0, $total);
        }
        return $images ?? [];
    }

}
