<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Card;
use GuzzleHttp\Psr7\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cards.index', ['cards' => Card::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        $request->validate([
            'membership_id' => 'required|unique:cards,membership_id|exists:memberships,id|',
            'balance' => 'required|numeric|between:0,99.99',
            'status' => 'required|in:active,inactive'
        ]);

        Card::create($request->all());

        return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return view('cards.show', ['card' => $card]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('cards.edit', ['card' => $card]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        $request->validate([
            'membership_id' => 'required|exists:memberships,id|',
            'balance' => 'required|numeric|between:0,99.99',
            'status' => 'required|in:active,inactive'
        ]);

        $card->updateOrFail($request->all());

        return redirect()->route('cards.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        if ($card)
            $card->delete();
        return redirect()->route('cards.index');
    }

    public function updateStatus()
    {
        DB::select('CALL update_cards_status');
        return redirect()->route('cards.index');
    }

    public function deduct(StoreCardRequest $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1|max:20',
        ]);

        $amount = $request->get('amount');

        DB::select("CALL money_deduction($amount)");

        return redirect()->route('cards.index');
    }
}
