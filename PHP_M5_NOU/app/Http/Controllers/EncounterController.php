<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Encounter;
use App\Models\Team;

class EncounterController extends Controller
{
    public function __construct(){
        $this->middleware('can:encounters.index')->only('index');
        $this->middleware('can:encounters.show')->only('show');
        $this->middleware('can:encounters.create')->only('create');
        $this->middleware('can:encounters.edit')->only('edit');
        $this->middleware('can:encounters.destroy')->only('delete');
    }

    public function index(){
        $encounters = Encounter::all();
        return view('encounters.index', compact('encounters'));
    }

    public function create(){
        $teams = Team::all();
        return view('encounters.create', compact('teams'));
    }

    public function store(Request $request){
        $request -> validate([
            'team_1' => 'required',
            'team_2' => 'required|different:team_1',
            'when' => 'required|date',
            'where' => 'nullable'
        ]);
        $encounter = new Encounter;
        $team1 = Team::find($request -> team_1);
        $team2 = Team::find($request -> team_2);
        $encounter -> team_1_id = $team1 -> id;
        $encounter -> team_2_id = $team2 -> id;
        $encounter -> when = $request -> when;
        $encounter -> where = $request -> where;
        $encounter -> save();
        return view('encounters.show', compact('encounter', 'team1', 'team2'));
    }

    public function show(Encounter $encounter){
        $team1 = Team::find($encounter -> team_1_id);
        $team2 = Team::find($encounter -> team_2_id);
        return view('encounters.show', compact('encounter', 'team1', 'team2'));
    }

    public function edit(Encounter $encounter){
        $teams = Team::all();
        return view('encounters.edit', compact('encounter', 'teams'));
    }

    public function update(Request $request, Encounter $encounter){
        dd($encounter);
        $request -> validate([
            'team_1_id' => ['required', Rule::unique('encounters')->ignore($encounter->id)], //
            'team_2_id' => ['required', 'different:team_1_id', Rule::unique('encounters')->ignore($encounter->id)], 
            'when' => 'required|date',
            'where' => 'nullable'
        ]);
        dd($request);
        $encounter -> team_1_id = $request -> team_1_id;
        $encounter -> team_2_id = $request -> team_2_id;
        $encounter -> when = $request -> when;
        $encounter -> where = $request -> where;
        $encounter -> save();
        return view('encounters.update', compact('encounter'));

    }

    public function delete(Encounter $encounter){
        return view('encounters.delete', compact('encounter'));
    }

    public function destroy(Encounter $encounter){
        $encounter -> delete();
        return view('encounters.deleted', compact('encounter'));
    }
}
