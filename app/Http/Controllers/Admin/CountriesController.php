<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Requests\HandleCountriesRequest;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.countries.index', [
            'countries' => Country::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\HandleCountriesRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HandleCountriesRequest $request)
    {
        DB::table('countries')->insert($request->validated());
        flash('Land met succes toegevoegd')->success();
        return redirect('admin/countries');
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
        return view('admin.countries.edit', [
            'country' => Country::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HandleCountriesRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HandleCountriesRequest $request, $id)
    {
        DB::table('countries')
            ->where('id', $id)
            ->update($request->validated());
        flash('Land met succes opgeslagen')->success();
        return redirect('admin/countries');
    }

    public function delete($id)
    {
        return view('admin.countries.delete', [
            'country' => Country::find($id),
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
        DB::table('countries')
            ->where('id', $id)
            ->delete();
        flash('Land met succes verwijderd')->success();
        return redirect('admin/stadiums');
    }

}
