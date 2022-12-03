<?php

use App\Models\User;
use App\Models\Design;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ProjectController;

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
// Route::get('/dasboard', function () {
//     return view('dasboard.indexAdmin', [
//         'tittle' => 'Dasboard',
//         'designs' => Design::all(),
//         'projects' => Project::all(),
//         'categories' => Category::all(),
//         'users' => User::all(),
//     ]);
// });
// Route::get('dasboard-project', function () {
//     return view('dasboard.projectAdmin', [
//         'tittle' => 'Dasboard Project',
//         'projects' => Project::all(),
//         'projects_2' => Project::take(10)->get(),
//         'categories' => Category::all(),
//         'users' => User::all(),
//     ]);
// });
