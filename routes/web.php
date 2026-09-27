<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    //return view('onas');
    //return view('onas', ['zadania' => $zadania]);
    //return view('onas')->with('zadania',$zadania);
    return view('onas', compact('zadania'));
});