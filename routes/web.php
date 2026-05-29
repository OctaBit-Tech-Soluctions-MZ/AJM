<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RecoverPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Public\AboutController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\EventController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\PartnerController;
use App\Http\Controllers\Public\ProjectController;
use Illuminate\Support\Facades\Route;
// use Laravel\Fortify\Features;

// public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');

// auth routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
Route::get('/forgot', [RecoverPasswordController::class, 'forgot'])->name('forgot');
Route::get('/reset', [RecoverPasswordController::class, 'reset'])->name('reset');

Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');

// Private routes

// Admin routes
Route::get('/admin/dashboard', function (){
    return inertia('private/admin/Dashboard');
});
Route::get('/admin/events', function () {
    return inertia('private/admin/Eventos');
});
Route::get('/admin/projects', function () {
    return inertia('private/admin/Projetos');
});
Route::get('/admin/projects/create', function () {
    return inertia('private/admin/NovoProjeto');
});
Route::get('/admin/members', function () {
    return inertia('private/admin/Membros');
});
Route::get('/admin/partners', function () {
    return inertia('private/admin/Parceiros');
});
Route::get('/admin/partners/create', function () {
    return inertia('private/admin/NovoParceiro');
});
Route::get('/admin/events/create', function () {
    return inertia('private/admin/NovoEvento');
});

// Member routes
Route::get('/member/profile/create', function () {
    return inertia('private/member/CriarPerfil');
});

// require __DIR__.'/settings.php';
