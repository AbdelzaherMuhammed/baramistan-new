<?php
use Illuminate\Support\Facades\Route;


Route::name('dashboard.')->group( function () {
    Route::resource('videos' , 'VideoController')->only('create','update','edit','store','show')->names('videos');
});
