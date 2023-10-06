<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Livewire\Counter;
use App\Livewire\Tasks;
use App\Livewire\Users;
use App\Livewire\Profiles;
use App\Livewire\AddUser;
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

Route::get('/', Tasks::class);
Route::get('/users', Users::class);
Route::get('/profiles', Profiles::class);
Route::get('/add-user', AddUser::class);
// Route::post('/add-user', User::class);
// Route::get('/counter', Counter::class);