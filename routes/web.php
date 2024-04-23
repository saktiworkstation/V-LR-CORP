<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeControler;
use App\Models\Experience;
use App\Models\Message;
use App\Models\Project;
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

Route::get('/', [HomeControler::class, 'index']);

Route::any('/dashboard', function () {
    return view('dashboard', [
        'messages' => Message::all(),
        'experiences' => Experience::orderBy('order', 'asc')->get(),
        'projects' => Project::all(),
    ]);
});

Route::get('/dashboard/form/experience/create', [ExperienceController::class, 'create']);
Route::post('/dashboard/form/experience/create', [ExperienceController::class, 'store']);
