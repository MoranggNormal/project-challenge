<?php

use App\Http\Controllers\ProfileController;
use App\Models\Car;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'cars' => Car::whereHas('revisions', function ($query) {
            $query->whereNotNull('description');
        })->get(),
    ]);
})->name("home");

Route::get('/car/{car:id}', function (Car $car) {
    $revision = $car->revisions->first();

    return Inertia::render('Car/Car', [
        'car' => $car,
        'revision' => $revision,
    ]);
})->name('car.show');

Route::get('/car/edit/{car:id}', function (Car $car) {
    $revision = $car->revisions->first();

    return Inertia::render('Car/Edit', [
        'car' => $car,
        'revision' => $revision,
    ]);
})->name('car.show');

// ->middleware(['auth', 'verified'])->name('home')

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
