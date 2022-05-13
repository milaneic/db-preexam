<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMembershipRequest;
use App\Http\Requests\UpdateMembershipRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Membership;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memberships.index', ['memberships' => Membership::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memberships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembershipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipRequest $request)
    {
        $request->validate([
            'people_id' => 'required|integer|unique:memberships|exists:people,id',
            'membership_type' => 'required|in:1,2',
            'begin_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:active,inactive,paused'
        ]);

        Membership::create($request->all());

        return redirect()->route('memberships.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        return view('memberships.show', ['membership' => $membership, 'person' => $membership->person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        return view('memberships.edit', ['membership' => $membership]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembershipRequest  $request
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembershipRequest $request, Membership $membership)
    {
        $request->validate([
            'people_id' => 'required|integer|exists:people,id',
            'membership_type' => 'required|in:1,2',
            'begin_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required|in:active,inactive,paused'
        ]);

        $membership->updateOrFail($request->all());

        return redirect()->route('memberships.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membership  $membership
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membership $membership)
    {
        if ($membership)
            $membership->delete();
        return redirect()->route('memberships.index');
    }

    public function updateStatus()
    {
        config()->set('database.connections.mysql.strict', false);
        DB::select('CALL update_memberships_status');
        return redirect()->route('memberships.index');
        config()->set('database.connections.mysql.strict', true);
    }
}
