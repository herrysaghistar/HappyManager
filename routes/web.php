<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testC', 'app\test\DataControl\C\ModulName\TemplateOnlyC@exampleMethod');

Route::get('/check-class-loaded', function () {
    $loadedClasses = get_declared_classes();
    
    return response()->json($loadedClasses);
});