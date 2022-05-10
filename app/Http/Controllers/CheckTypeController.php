<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckTypeRequest;
use App\Http\Requests\UpdateCheckTypeRequest;
use App\Models\CheckType;

class CheckTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CheckType::all();
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
     * @param  \App\Http\Requests\StoreCheckTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckType  $checkType
     * @return \Illuminate\Http\Response
     */
    public function show(CheckType $checkType)
    {
        return $checkType;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckType  $checkType
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckType $checkType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckTypeRequest  $request
     * @param  \App\Models\CheckType  $checkType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckTypeRequest $request, CheckType $checkType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckType  $checkType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckType $checkType)
    {
        //
    }
}
