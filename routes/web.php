<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DesignController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/design', [DesignController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);

Route::get('/dasboard', function () {
    return view('dasboard', [
        'tittle' => 'Dasboard',
        'designs' => \App\Models\Design::all(),
        'projects' => \App\Models\Project::all(),
        'categories' => \App\Models\Category::all(),
        'users' => \App\Models\User::all(),
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'tittle' => 'About'
    ]);
});



Route::get('/contact', function () {
    return view('contact', [
        'tittle' => 'Contact'
    ]);
});
