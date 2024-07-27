<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get("/hotels", [HotelController::class, "index"])->middleware(["auth", "verified"])->name("hotels.index");
Route::get("/hotels/{id}", [HotelController::class, "show"])->middleware(["auth", "verified"])->name("hotels.show");
Route::get("/bookings", [BookingController::class, "index"])->middleware(["auth", "verified"])->name("bookings.index");
Route::get("/bookings/{id}", [BookingController::class, "show"])->middleware(["auth", "verified"])->name("bookings.show");
Route::post("/bookings", [BookingController::class, "store"])->middleware(["auth", "verified"])->name("bookings.store");
Route::post("/bookings/{id}", [BookingController::class, "delete"])->middleware(["auth", "verified"])->name("bookings.cancel");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
