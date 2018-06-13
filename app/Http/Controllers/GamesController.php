<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Country;
use App\Game;
use App\Predictions;
use Illuminate\Support\Facades\Auth;
use Validator;

class GamesController extends Controller
{

    public $predictions;
    public $userPredictions;

    public function __construct()
    {
        $this->middleware('auth');
        $this->predictions = new Predictions();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('games.index', [
            'gamesByPoule' => Game::all()->groupBy(function ($game) {
                return $game->poule;
            }),
            'userPredictions' => $this->getUserPredictions(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function save(Request $request)
    {
        foreach ($input = $request->all() as $gameId => $gamePrediction) {
            if (false === is_numeric($gameId) ||
                true === empty(array_filter($gamePrediction)) ||
                true === $this->gameInPast($gameId)
            ) {
                continue;
            }

            if (true === ($validator = Validator::make($gamePrediction, [
                'goalsHome' => 'numeric',
                'goalsAway' => 'numeric',
                'cardsYellow' => 'numeric',
                'cardsRed' => 'numeric',
            ]))->fails()) {
                return redirect('games')
                    ->withErrors($validator)
                    ->withInput();
            }

            $strMethod = (false === array_key_exists($gameId, $this->getUserPredictions())) ? 'store' : 'update';
            $this->$strMethod($gamePrediction, $gameId);
        }
        flash('Wedstijd(en) met succes opgeslagen')->success();
        return redirect('games');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($data, $id)
    {
        $this->predictions->create(array_merge($data, [
            'gameId' => $id,
            'userId' => Auth::id(),
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  array  $data
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($data, $id)
    {
        $this->predictions->where('userId', Auth::id())->where('gameId', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getUserPredictions(): array
    {
        return ($this->userPredictions = $this->predictions
            ->where('userId', Auth::id())
            ->get()
            ->keyBy('gameId')
            ->toArray()
        );
    }

    private function gameInPast(int $id): bool
    {
        return (new Carbon())->setTimeFromTimeString(($game = Game::find($id))->date.' '.$game->time)->isPast();
    }

}
