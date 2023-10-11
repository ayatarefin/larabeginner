<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\KernelInterface;

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

// ->name() method is for privacy and good practice and md5 is hash of a string

// Route::get(md5('/about'), function () {
//     return view('about');
// })->name('about.us');



// this part is main how laravel format followed using controller

Route::get('/contact',[FirstController::class, 'contact'])->name('contact.us');
Route::get('/about',[FirstController::class, 'about'])->name('about.us');

Route::post('/student/store',[FirstController::class, 'studentstore'])->name('student.store');
Route::post('/another/store',[FirstController::class, 'aboutstore'])->name('about.store');

// this is another process
// Route::view('/about','about');

// Route::get('/contactdidjdjdidjdi', function () {
//     return view('contact');
// })->name('contact.us');


// Route parameter example

Route::get('/search/{roll}', function($roll){
    return ("his roll is $roll");
});

// steps 1 first create middleware.php
// steps 2 register that php file in kernel.php of http
// steps 3 do the routes process, view process
// in ->middleware('') indicates the registered name of KernelInterface
// steps 4 give the condition you want to work in the middleware.php

// Route::get('/country', function () {
//     return view('country');
// })->middleware('country');

Route::get('/country',[FirstController::class, 'country'])->name('about.us')->middleware('country');;



// just ignore this part now

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
