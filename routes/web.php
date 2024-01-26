<?php

use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\HomeController;
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

// Redefine the route for the home page using a controller:
Route::get('/', [HomeController::class, 'index']);

// Not using any controllers, returning the view directly from the router file
// Route::get('/greetings', function () {
//     return view('greetings');
// });

// Using the index() method in the GreetingsController class 
Route::get('/greetings', [GreetingsController::class, 'index']); // The preferred way