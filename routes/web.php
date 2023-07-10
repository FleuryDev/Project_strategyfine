<?php

use App\Http\Controllers\PostsController;
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
    return view('home');
})->name('home');
;


Route::get('/Developpement', function () {
    return view('dev.developpement');
})->name('developpement');

Route::get('/Developpement/E_commerce', function () {
    return view('dev.ecommerce');
})->name('ecommerce');

Route::get('/Developpement/Site web', function () {
    return view('dev.site');
})->name('site');

Route::get('/Developpement/Refonte de site', function () {
    return view('dev.refonte');
})->name('refonte');

Route::get('/Developpement/Applications mobiles', function () {
    return view('dev.applis');
})->name('applis');



Route::get('/Referencement', function () {
    return view('ref.referencement');
})->name('ref');

Route::get('/Referencement/SEO', function () {
    return view('ref.seo');
})->name('refSeo');

Route::get('/Referencement/SEA', function () {
    return view('ref.sea');
})->name('refSea');


Route::get('/Design', function () {
    return view('design.design');
})->name('design');
Route::get('/Design/Maquette de site', function () {
    return view('design.maquette');
})->name('maquette');
Route::get('/Design/Design graphique', function () {
    return view('design.graphique');
})->name('designGraphique');


Route::get('/Stategie_de_contenu', function () {
    return view('strategie.strategie');
})->name('strategie');
Route::get('/Stategie_de_contenu/Gestion de resaeux sociaux', function () {
    return view('strategie.reseaux');
})->name('reseaux');
Route::get('/Stategie_de_contenu/Montage_video', function () {
    return view('strategie.video');
})->name('video');
Route::get('/Stategie_de_contenu/Redaction_web_seo', function () {
    return view('strategie.seo');
})->name('strategieSEO');


Route::get('/Qui-sommes-nous', function () {
    return view('apropos');
})->name('qui_somme_nous');

Route::get('/Jeux-concours', function () {
    return view('jeux');
})->name('jeux');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified', 'isAdmin'])->group(function () {
    Route::resource('/Blog', PostsController::class)->except(['index', 'show']);
});
require __DIR__ . '/auth.php';