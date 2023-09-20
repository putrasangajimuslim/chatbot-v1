<?php

use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'index'])->name('/');
Route::get('chat', [ChatController::class, 'index'])->name('chat');
Route::get('get-question-answer-openai', [ChatController::class, 'getQuestionAnswerOpenAi'])->name('get-question-answer-openai');