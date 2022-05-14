<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleTypeRequest;
use App\Http\Requests\UpdatePeopleTypeRequest;
use Illuminate\Support\Facades\DB;
use App\Models\PeopleType;

class PeopleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('people_types.index', ['peopletypes' => DB::select('select * from people_types')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeopleTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleTypeRequest $request)
    {
        $request->validate([
            'type' => 'required|string|min:2|max:12'
        ]);

        DB::insert('insert into people_types (type) values (?)', [$request->get('type')]);

        return redirect()->route('peopletypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function show(PeopleType $peopletype)
    {
        dd($peopleType->people);
        return $peopleType;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function edit(PeopleType $peopletype)
    {
        return view('people_types.edit', ['pt' => $peopletype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeopleTypeRequest  $request
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleTypeRequest $request, PeopleType $peopletype)
    {
        $request->validate([
            'type' => 'required|string|min:2|max:12'
        ]);

        DB::update('update people_types set type = ? where id = ?', [$request->get('type'), $peopletype->id]);

        return redirect()->route('peopletypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeopleType $peopletype)
    {
        //
    }
}
