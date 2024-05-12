<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\PresentationsController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\LiensController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SitemapController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/presentation', [PresentationsController::class, 'index' ])->name('presentations.index');
Route::get('/role&missions', [RolesController::class, 'index' ])->name('roles.index');
Route::get('/projets', [ProjetsController::class, 'index' ])->name('projets.index');
Route::get('/teams', [TeamsController::class, 'index' ])->name('teams.index');
Route::get('/contacts', [ContactsController::class, 'index' ])->name('contacts.index');
Route::get('/activites-cipec', [ActivitesController::class, 'index' ])->name('activites.index');
Route::get('/liens-utiles', [LiensController::class, 'index' ])->name('liens.index');
// Route pour le formulaire de contact
// Route::post('/envoyer-email', [EmailController::class, 'store'])->name('envoyerEmail');
Route::post('/envoyer-email', [EmailController::class, 'envoyerEmail'])->name('envoyerEmail');

Route::get('/sitemap.xml', [SitemapController::class, 'generate']);
// Dans routes/web.php
Route::get('locale/{lang}', [LocaleController::class, 'index'])->name('switchLang');

