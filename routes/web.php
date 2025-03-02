<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    
    return view('welcome');
});




for ($i = 1; $i <= 100; $i++) {
   
    $controller = "App\Http\Controllers\User{$i}Controller";
   
    Route::get("user{$i}", [$controller, 'index']);
}
