<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// inndex file route
Route::get('/', function () {
    return view('home');
})->name("home");

// formation file route
Route::get('/formation', function () {
    return view('formation.formation');
})->name("formation");

// inscription file route
Route::get('/inscription', function () {
    return view('inscription.inscription');
})->name("inscription");

// conatct file route
Route::get('/contact', function () {
    return view('contact.contact');
})->name("contact");

// authentification file route
Route::get('/login', function () {
    return view('login.usercompte');
})->name("usercompte");

// authentification file route
Route::get('/connexion', function () {
    return view('connexion.connexion');
})->name("connexion");





