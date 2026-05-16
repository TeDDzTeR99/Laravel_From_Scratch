<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //$ideas = DB::table('ideas')->latest()->get();
    $ideas = Idea::query()
    ->when(request('state'), function ($query, $state) {
        $query->where('state', $state);
    });
    return view('ideas', [
        'ideas' => $ideas,
    ]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::post('/ideas', function () {

    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/')->with('message', 'Your idea was added!');
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/')->with('message', 'Your ideas were deleted!');
});