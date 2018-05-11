<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\handleStadiumsRequest;
use Illuminate\Http\Request;
use App\Stadium;
use Illuminate\Support\Facades\DB;

class StadiumsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stadiums.index', [
            'stadiums' => Stadium::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stadiums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\HandleStadiumsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HandleStadiumsRequest $request)
    {
        DB::table('stadiums')->insert($request->validated());
        flash('Stadion met succes toegevoegd')->success();
        return redirect('admin/stadiums');
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
        return view('admin.stadiums.edit', [
            'stadium' => Stadium::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HandleStadiumsRequest $request, $id)
    {
        DB::table('stadiums')
        ->where('id', $id)
        ->update($request->validated());
        flash('Stadion met succes opgeslagen')->success();
        return redirect('admin/stadiums');
    }

    public function delete($id)
    {
        return view('admin.stadiums.delete', [
            'stadium' => Stadium::find($id),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('stadiums')
            ->where('id', $id)
            ->delete();
        flash('Stadion met succes verwijderd')->success();
        return redirect('admin/stadiums');
    }

}
