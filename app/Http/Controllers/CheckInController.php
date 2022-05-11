<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCheckInRequest;
use App\Http\Requests\UpdateCheckInRequest;
use App\Models\CheckIn;
use Carbon\Carbon;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkins.index', ['checkins' => CheckIn::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checkins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCheckInRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCheckInRequest $request)
    {
        $request->validate([
            'card_id' => 'required|exists:cards,id',
            'check_type' => 'required|in:1,2',
            'timestamp' => 'required|date',
        ]);

        CheckIn::create($request->all());

        return redirect()->route('checkins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function show(CheckIn $checkin)
    {
        return view(
            'checkins.show',
            ['checkin' => $checkin]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCheckInRequest  $request
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCheckInRequest $request, CheckIn $checkin)
    {
        $request->validate([
            'card_id' => 'required|exists:cards,id',
            'check_type' => 'required|in:1,2',
            'timestamp' => 'required|date',
        ]);

        $checkin->updateOrFail($request->all());

        return redirect()->route('checkins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckIn  $checkIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckIn $checkin)
    {
        if ($checkin)
            $checkin->delete();

        return redirect()->route('checkins.index');
    }

    public function checkout(CheckIn $checkin)
    {
        $checkin->timestamp_out = Carbon::now();
        $checkin->save();

        return redirect()->route('checkins.index');
    }
}
