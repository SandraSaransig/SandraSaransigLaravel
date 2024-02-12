<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $players = Player::where('visible',1)->paginate(6)
        $players = Player::orderBy('created_at', 'desc')->get();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request)
    {
        //
        $player = new Player();
        $player->name = $request->get('name');
        $player->slug = Str::slug($player->name);
        $player->twitter = $request->get('twitter');
        $player->instagram = $request->get('instagram');
        $player->twitch = $request->get('twitch');
        $player->tshirt_number = $request->get('tshirt_number');
        $player->position = $request->get('position');
        $player->visible = $request->has('visible') ? 1 : 0;
        $player->save();

        return view('players.stored', compact('player'));

    }

    /**
     * Display the specified resource.
     * $player = $request->file('balde')->storeAs('public', $player->id .'jpg');
     */
    public function show(Player $player)
    {
        //
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }

    //Metodo para establecer visible al jugador
    public function visiblePlayer(Player $player){
        $player->visible = 1;
        $player->save();
        return redirect()->route('players.index', compact('player'));
    }

    //Metodo para establecer invisible al jugador
    public function invisiblePlayer(Player $player){
        $player->visible = 0;
        $player->save();
        return redirect()->route('players.index', compact('player'));
    }

}
