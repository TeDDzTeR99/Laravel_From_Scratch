<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome', [ 
        'greeting' => 'Hello',
        'person' => request('person') ?? 'John Doe',
        'tasks' => [
            'Go to the store',
            'Finish my screencast',
            'Clean the house',
            'Make some food',
        ]
]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');