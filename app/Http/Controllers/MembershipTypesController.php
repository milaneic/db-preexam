<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMembershipTypesRequest;
use App\Http\Requests\UpdateMembershipTypesRequest;
use App\Models\MembershipTypes;

class MembershipTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MembershipTypes::all();
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
     * @param  \App\Http\Requests\StoreMembershipTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipTypes $membershipTypes)
    {
        return $membershipTypes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipTypes $membershipTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembershipTypesRequest  $request
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembershipTypesRequest $request, MembershipTypes $membershipTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipTypes $membershipTypes)
    {
        //
    }
}
