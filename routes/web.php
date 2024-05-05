<?php

use App\Models\Message;
use App\Models\Project;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperienceController;

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

Route::get('/', [HomeControler::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

// destroy user data
Route::delete('/auth/{id}/delete', [AuthController::class, 'destroy'])->middleware('auth');
// edit user data
Route::put('/auth/{id}/edit', [AuthController::class, 'edit'])->middleware('auth');

Route::any('/dashboard', function () {
    return view('dashboard', [
        'messages' => Message::all(),
        'experiences' => Experience::orderBy('order', 'asc')->get(),
        'projects' => Project::all(),
    ]);
})->middleware('auth');

Route::get('/dashboard/form/experience/create', [ExperienceController::class, 'create'])->middleware('auth');
Route::post('/dashboard/form/experience/create', [ExperienceController::class, 'store'])->middleware('auth');
