<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StaffCOntroller;
use App\Http\Controllers\UserController;
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

//Parti reservé au public
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/catalogue', [PublicController::class, 'catalogueV'])->name('catvoiture');
Route::get('/contact', [PublicController::class, 'contactF'])->name('contact');
Route::get('/quisommesnous', [PublicController::class, 'quisommeNous'])->name('quisommenous');
Route::get('/galleries', [PublicController::class, 'galleriesF'])->name('gallery');
Route::get('/faqs', [FaqController::class, 'index'])->name('faq');
Route::get('/personnel', [PublicController::class, 'personnelF'])->name('personnel');
Route::get('/voituredetail/{idv}', [PublicController::class, 'detailVoitureF'])->name('detailvoiture');


//Parti reservé au utilisateur connecté


//Parti reservé au membre du staff
Route::get('/staff', [StaffCOntroller::class , 'index'])->name('staff.home');
Route::get('/listevoiture', [StaffCOntroller::class, 'listV'])->name('list');
Route::get('/create', [StaffCOntroller::class, 'create'])->name('addvoiture');
Route::post('/voitures', [StaffCOntroller::class, 'store'])->name('voitures.store');
Route::get('/profilestaff', [StaffController::class, 'profileF'])->name('profilestaff');
Route::get('/modifierprofile', [StaffController::class, 'editP'])->name('profiledit');
Route::get('/edit', [StaffController::class, 'edit'])->name('voitureedit');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
