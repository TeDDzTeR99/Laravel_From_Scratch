<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/ideas', function () {
    //$ideas = DB::table('ideas')->latest()->get();
    $ideas = Idea::all();
    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
// Show
Route::get('/ideas/{idea}', function (Idea $idea) {

    return view('ideas.show', [
        'idea' => $idea,
    ]);
});
// Edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {

    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

// Update
Route::patch('/ideas/{idea}', function (Idea $idea) {

    $idea->update([
        'description' => request('description'),
    ]);

    return redirect('/ideas/' . $idea->id)->with('message', 'Your idea was updated!');
});
// Store
Route::post('/ideas', function () {

    Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas')->with('message', 'Your idea was added!');
});
// Destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas')->with('message', 'Your idea was deleted!');
});