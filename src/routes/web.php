<?php


Route::middleware(['web'])->group(function () {
    Route::get('/apps/mail', function() {
        return view('mail::inbox');
    });
});