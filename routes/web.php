<?php

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

Route::any('/{slug}', function () {
    return view('dashboard', [
        'messages' => Message::all(),
        'experiences' => Experience::all(),
        'projects' => Project::all(),
    ]);
});
