<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/WelcomeToLaravel', function () {
    return view('welcome');
});
Route::get('/', function () {
    echo'Homepage';
});
Route::get('/product', function () {
    echo 'Liste des produits';
});
Route::get('/product/{id}', function () {
    echo 'Fiche produit du produit {id}';
});
Route::get('/cart', function () {
    echo 'Panier';
});
