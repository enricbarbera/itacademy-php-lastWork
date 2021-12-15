<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Team;

class TeamController extends Controller
{
    public function __construct(){
        $this->middleware('can:teams.index')->only('index');
        $this->middleware('can:teams.show')->only('show');
        $this->middleware('can:teams.create')->only('create');
        $this->middleware('can:teams.edit')->only('edit');
        $this->middleware('can:teams.destroy')->only('delete');
    }

    public function index(){
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }
    
    public function show(Team $team){
        return view('teams.show', compact('team'));
    }
    
    public function create(){
        return view('teams.create');
    }
    
    public function store(Request $request){
        $request -> validate([
            'name' => 'required|unique:teams',
            'color' => 'nullable'
        ]);
        $team = new Team;
        $team -> name = $request -> name;
        $team -> city = $request -> city;
        $team -> stadium = $request -> stadium;
        $team -> color = $request -> color;
        $team -> save();
        return redirect()->route('teams.show', $team->id);
    }
    
    public function edit(Team $team){
        return view('teams.edit', compact('team'));
    }
    
    public function update(Request $request, Team $team){
        $request->validate([
            // 'name' => 'required'|Rule::unique('teams')->ignore($team->id)
            'name' => ['required', Rule::unique('teams')->ignore($team->id)]
        ]);
        $team -> name = $request -> name;
        $team -> city = $request -> city;
        $team -> stadium = $request -> stadium;
        $team -> color = $request -> color;
        $team -> save();
        return view('teams.update', compact('team'));
    }
    
    public function delete(Team $team){
        return view('teams.delete', compact('team'));
    }

    public function destroy(Team $team){
        $team -> delete();
        return view('teams.deleted', compact('team'));
    }
}
