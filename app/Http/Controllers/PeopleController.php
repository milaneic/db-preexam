<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use App\Models\People;
use App\Models\PeopleType;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('people.index', ['people' => DB::select('SELECT * FROM people')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create', ['people_types' => PeopleType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeopleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleRequest $request)
    {
        $validatedData = $request->validate([
            'people_type' => 'required|in:1,2',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'joined_at' => 'required|date'
        ]);
        DB::insert('insert into people (people_type, first_name, last_name, gender, dob, joined_at)
         values (?, ?, ?, ?, ?, ? )', [
            $validatedData['people_type'], $validatedData['first_name'],
            $validatedData['last_name'], $validatedData['gender'],
            $validatedData['dob'], $validatedData['joined_at']
        ]);
        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $person)
    {
        return view('people.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $person)
    {
        return view('people.edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeopleRequest  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleRequest $request, People $person)
    {
        $validatedData = $request->validate([
            'people_type' => 'required|in:1,2',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'joined_at' => 'required|date'
        ]);

        $person->updateOrFail($validatedData);

        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $person)
    {
        if ($person)
            $person->delete();
        return redirect()->route('people.index');
    }
}
