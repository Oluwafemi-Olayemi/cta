<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [\App\Http\Controllers\Dashboard::class, 'index'])->name('dashboard');
    Route::get('/searchconference', function(){
       return view('conferences.search');
    })->name('searchview');

    Route::resource('/conferences',\App\Http\Controllers\ConferenceResources::class);
    Route::post('/searchconference', [\App\Http\Controllers\ConferenceResources::class, 'search'])
        ->name('conferences.search');

    Route::resource('/grants',\App\Http\Controllers\GrantResources::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/newsletter', [\App\Http\Controllers\NewsletterController::class, 'createNewsletter']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
