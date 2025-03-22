<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('acceuil');
})->name('acceuil');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');


Route::get('/chairs', function () {
    return view('option.chairs');
})->name('chairs');
Route::get('/floral', function () {
    return view('option.floral');
})->name('floral');
Route::get('/beverage', function () {
    return view('option.beverage');
})->name('beverage');
Route::get('/bigtop', function () {
    return view('option.bigtop');
})->name('bigtop');
Route::get('/buffet', function () {
    return view('option.buffet');
})->name('buffet');
Route::get('/cake', function () {
    return view('option.cake');
})->name('cake');
Route::get('/dj', function () {
    return view('option.dj');
})->name('dj');
Route::get('/light', function () {
    return view('option.light');
})->name('light');
Route::get('/music', function () {
    return view('option.music');
})->name('music');
Route::get('/pastry', function () {
    return view('option.pastry');
})->name('pastry');
Route::get('/photoinst', function () {
    return view('option.photoinst');
})->name('photoinst');
Route::get('/theme', function () {
    return view('option.theme');
})->name('theme');
Route::get('/videograph', function () {
    return view('option.videograph');
})->name('videograph');
Route::get('/wedding', function () {
    return view('option.wedding');
})->name('wedding');
Route::get('/cocktail', function () {
    return view('option.cocktail');
})->name('cocktail');


Route::get('/stand', function () {
    return view('option.stand');
})->name('stand');

Route::get('/table', function () {
    return view('option.table');
})->name('table');

Route::get('/tent', function () {
    return view('option.tent');
})->name('tent');
Route::get('/top', function () {
    return view('option.top');
})->name('top');
Route::get('/hall', function () {
    return view('option.hall');
})->name('hall');
Route::get('/tableware', function () {
    return view('option.tableware');
})->name('tableware');
Route::get('/parasol', function () {
    return view('option.parasol');
})->name('parasol');
Route::get('/traditional', function () {
    return view('option.traditional');
})->name('traditional');
Route::get('/gazebo', function () {
    return view('option.gazebo');
})->name('gazebo');
Route::get('/car', function () {
    return view('option.car');
})->name('car');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/check-email', [RegisterController::class, 'checkEmail'])->name('check.email');
// Dashboard Client
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
});

// Dashboard Prestataire
Route::middleware(['auth', 'role:provider'])->group(function () {
    Route::get('/provider/dashboard', [ProviderController::class, 'index'])->name('provider.dashboard');
});

// Panel Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.panel');
});

// Déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/provider/services', [ProviderController::class, 'index'])->name('provider.services');
});
