<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function __construct(){
        $this->middleware('can:players.index')->only('index');
        $this->middleware('can:players.show')->only('show');
        $this->middleware('can:players.create')->only('create');
        $this->middleware('can:players.edit')->only('edit');
        $this->middleware('can:players.destroy')->only('delete');
    }

    public function index(){
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create(){
        $teams = Team::all();
        return view('players.create', compact('teams'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:players',
            'address' => 'nullable|string',
            'email' => 'nullable|unique:players|email',
            'license' => 'required|unique:players|digits:8',
            'team' => 'required|integer'
        ]);
        $player = new Player();
        $player -> name = $request -> name;
        $player -> address = $request -> address;
        $player -> email = $request -> email;
        $player -> license = $request -> license;
        $player -> team_id = $request -> team;
        $player -> save();
        return view('players.show', compact('player'));
    }

    public function show(Player $player){
        return view('players.show', compact('player'));
    }

    public function edit(Player $player){
        $teams = Team::all();
        return view('players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player){
        $request->validate([
            'name' => ['required', Rule::unique('players')->ignore($player->id)],
            'address' => 'nullable|string',
            'email' => ['nullable', Rule::unique('players')->ignore($player->id)],
            'license' => ['required', 'digits:8', Rule::unique('players')->ignore($player->id)],
            'team' => 'required|integer'
        ]);
        $player -> name = $request -> name;
        $player -> address = $request -> address;
        $player -> email = $request -> email;
        $player -> license = $request -> license;
        $player -> team_id = $request -> team;
        $player -> save();
        return view('players.update', compact('player'));
    }

    public function delete(Player $player){
        return view('players.delete', compact('player'));
    }
    
    public function destroy(Player $player){
        $player -> delete();
        return view('players.deleted', compact('player'));
    }
}
