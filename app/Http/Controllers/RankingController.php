<?php

namespace App\Http\Controllers;

use App\UserScore;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        return view('ranking', [
            'ranking' => UserScore::select([
                DB::raw('SUM(points) as `total`'),
                'users.name',
            ])->join('users', 'users.id', '=', 'users_score.userId')
            ->orderByRaw('total desc')
            ->groupBy('users_score.userId', 'users.name')
            ->get(),
            'topten' => UserScore::select([
                'users_score.points',
                'users.name',
            ])->join('users', 'users.id', '=', 'users_score.userId')
            ->where('date', '=',
                UserScore::select(['date',])->orderBy('date', 'desc')->first()->date ?? Carbon::now()->format('Y-m-d'))
            ->orderBy('points', 'desc')->limit(10)->get(),
        ]);
    }

}
