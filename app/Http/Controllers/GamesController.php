<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Predictions;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

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
            'games' => Game::all(),
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
            if (false === is_numeric($gameId)) {
                continue;
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
        if (null !== $this->userPredictions) {
            return $this->userPredictions;
        }
        return ($this->userPredictions = $this->predictions
            ->where('userId', Auth::id())
            ->get()
            ->keyBy('gameId')
            ->toArray()
        );
    }

}
