<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleTypeRequest;
use App\Http\Requests\UpdatePeopleTypeRequest;
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
        return PeopleType::all();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeopleTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeopleTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function show(PeopleType $peopleType)
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
    public function edit(PeopleType $peopleType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeopleTypeRequest  $request
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeopleTypeRequest $request, PeopleType $peopleType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeopleType  $peopleType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeopleType $peopleType)
    {
        //
    }
}
