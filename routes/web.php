<?php

use Illuminate\Support\Facades\Route;
use App\Orchid\Screens\TaskScreen;
use App\Orchid\Screens\StateScreen;
use App\Orchid\Screens\Idea;


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

Route::get('ppp', function () {
    return view('welcome');
});
Route::screen('/', TaskScreen::class)->name('platform.task');
Route::screen('state', StateScreen::class)->name('state');
Route::screen('/idea', Idea::class)->name('platform.idea');