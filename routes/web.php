<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check-class-loaded', function () {
    // Get all declared classes
    $loadedClasses = get_declared_classes();
    
    // Return the loaded classes as a JSON response
    return response()->json($loadedClasses);
});