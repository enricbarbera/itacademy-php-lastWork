<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\EncounterController;
use App\Http\Controllers\PlayerController;

use App\Mail\HelloMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
    // return view('welcome');
    // return view('layouts.app');
})/*->middleware(['print.date'])*/->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::group(['middleware' => 'auth'/*, 'middleware' => 'print.date'*/], function(){

    // Route::resource('teams', TeamController::class);

    Route::get('/teams/delete/{team}', [TeamController::class, 'delete'])->name('teams.delete');

    Route::get('/teams', [TeamController::class, 'index'])/*->middleware('can:teams.index')*/->name('teams.index');

    Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');

    Route::post('/teams/create', [TeamController::class, 'store'])->name('teams.store');

    Route::get('/teams/show/{team}', [TeamController::class, 'show'])->name('teams.show');

    Route::get('/teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');

    Route::put('/teams/edit/{team}', [TeamController::class, 'update'])->name('teams.update');

    Route::delete('/teams/delete/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');

    // Route::resource('encounters', EncounterController::class);

    Route::get('/encounters/delete/{encounter}', [EncounterController::class, 'delete'])->name('encounters.delete');

    Route::get('/encounters', [EncounterController::class, 'index'])->name('encounters.index');

    Route::get('/encounters/create', [EncounterController::class, 'create'])->name('encounters.create');

    Route::post('/encounters/create', [EncounterController::class, 'store'])->name('encounters.store');

    Route::get('/encounters/show/{encounter}', [EncounterController::class, 'show'])->name('encounters.show');

    Route::get('/encounters/edit/{encounter}', [EncounterController::class, 'edit'])->name('encounters.edit');

    Route::put('/encounters/edit/{encounter}', [EncounterController::class, 'update'])->name('encounters.update');

    Route::delete('/encounters/delete/{encounter}', [EncounterController::class, 'destroy'])->name('encounters.destroy');

    // Route::resource('players', PlayerController::class);

    Route::get('/players/delete/{player}', [PlayerController::class, 'delete'])->name('players.delete');

    Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

    Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');

    Route::post('/players/create', [PlayerController::class, 'store'])->name('players.store');

    Route::get('/players/show/{player}', [PlayerController::class, 'show'])->name('players.show');

    Route::get('/players/edit/{player}', [PlayerController::class, 'edit'])->name('players.edit');

    Route::put('/players/edit/{player}', [PlayerController::class, 'update'])->name('players.update');

    Route::delete('/players/delete/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');

// });

Route::get('/mail', function(){

    $mail = new HelloMailable;

    Mail::to('enric@labaseweb.com')->send($mail);

});