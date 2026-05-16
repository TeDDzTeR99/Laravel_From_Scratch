<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/')->with('message', 'Your idea was added!');
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/')->with('message', 'Your ideas were deleted!');
});