<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMembershipTypesRequest;
use App\Http\Requests\UpdateMembershipTypesRequest;
use Illuminate\Support\Facades\DB;
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
        return view('memberships_types.index', ['membershiptypes' => DB::select('select * from membership_types')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memberships_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMembershipTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipTypesRequest $request)
    {
        $request->validate([
            'type' => 'required|string|min:2|max:12'
        ]);

        DB::insert('insert into membership_types (type) values (?)', [$request->get('type')]);

        return redirect()->route('membershiptypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipTypes $membershiptype)
    {
        return $membershiptype;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipTypes $membershiptype)
    {
        return view('memberships_types.edit', ['mt' => $membershiptype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembershipTypesRequest  $request
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembershipTypesRequest $request, MembershipTypes $membershiptype)
    {
        $request->validate([
            'type' => 'required|string|min:2|max:12'
        ]);

        DB::update('update membership_types set type = ? where id = ?', [$request->get('type'), $membershiptype->id]);

        return redirect()->route('membershiptypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipTypes  $membershipTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipTypes $membershiptype)
    {
        //
    }
}
