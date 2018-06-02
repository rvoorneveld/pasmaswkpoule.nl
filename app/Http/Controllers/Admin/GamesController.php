<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Validator;
use App\Http\Controllers\Controller;
use App\Game;
use App\Gametypes;
use App\Country;
use App\Stadium;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.games.index', [
            'countries' => Country::orderBy('name')->get(),
            'games' => Game::all()->map(function($item) {
                $item['inFuture'] = (new Carbon("{$item->date} {$item->time}"))->isFuture();
                return $item;
            }),
            'stadiums' => Stadium::all(),
            'types' => Gametypes::all(),
        ]);
    }

    public function store(Request $request)
    {
        if (false === empty($game = ($request->all())['new'])) {
            $validator = Validator::make($game, [
                'typeId' => 'required',
                'stadiumId' => 'required',
                'date' => 'required|dateformat:yyyy-mm-dd',
                'time' => 'required',
                'homeId' => 'required',
                'awayId' => 'required',
            ]);

            if (true === $validator->fails()) {
                return redirect('admin/games')
                    ->withErrors($validator)
                    ->withInput();
            }

            DB::table('games')->insert($game);
            flash('Wedstijd met succes toegevoegd')->success();
        }
        return redirect('admin/games');
    }

    public function save(Request $request)
    {
        foreach ($input = $request->all() as $gameId => $game) {
            if (false === is_numeric($gameId)) {
                continue;
            }

            if (true === ($validator = Validator::make($game, [
                'goalsHome' => 'numeric',
                'goalsAway' => 'numeric',
                'cardsYellow' => 'numeric',
                'cardsRed' => 'numeric',
            ]))->fails()) {
                return redirect('admin/games')
                    ->withErrors($validator)
                    ->withInput();
            }

            DB::table('games')
                ->where('id', $gameId)
                ->update($game);
            if (true === ($booUpdateScores = (isset($input['updateScores']) && 'yes' === $input['updateScores']))) {
                Artisan::call('points:bygame', [
                    'gameId' => $gameId,
                ]);
            }
        }
        if (true === $booUpdateScores) {
            Artisan::call('points:total');
        }

        flash('Wedstijd(en) met succes opgeslagen')->success();
        return redirect('admin/games');
    }

}
