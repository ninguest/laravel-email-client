<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

// Route to list all emails
Route::get('/emails', [EmailController::class, 'index']);

// Route to display the form to create a new email
Route::get('/emails/create', [EmailController::class, 'create']);

// Route to store the new email
Route::post('/emails', [EmailController::class, 'store']);

// Route to show a specific email
Route::get('/emails/{id}', [EmailController::class, 'show']);

// Route to delete a specific email
Route::delete('/emails/{id}', [EmailController::class, 'destroy']);