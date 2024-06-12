<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/clubs', [ClubController::class, 'show'])->name('clubs.list');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    // Application Routes 
    Route::get('admin/application/list', [ApplicationController::class, 'list']);
    Route::get('admin/application/add', [ApplicationController::class, 'add']);
    Route::post('admin/application/add', [ApplicationController::class, 'insert']);
    Route::get('admin/application/edit/{id}', [ApplicationController::class, 'edit']);
    Route::post('admin/application/edit/{id}', [ApplicationController::class, 'update']);
    Route::get('admin/application/delete/{id}', [ApplicationController::class, 'delete']);

    // Club Routes 
    Route::get('admin/club/list', [ClubController::class, 'index'])->name('admin.club.list');
    Route::get('admin/club/add', [ClubController::class, 'add'])->name('admin.club.add');
    Route::post('admin/club/add', [ClubController::class, 'store'])->name('admin.club.store');
    Route::get('admin/club/edit/{club}', [ClubController::class, 'edit'])->name('admin.club.edit');
    Route::post('admin/club/edit/{club}', [ClubController::class, 'update'])->name('admin.club.update');
    Route::delete('/admin/club/delete/{club}', [ClubController::class, 'destroy'])->name('admin.club.delete');

    // Event Routes 
    Route::get('admin/event/list', [EventController::class, 'index'])->name('admin.event.list');
    Route::get('admin/event/add', [EventController::class, 'add'])->name('admin.event.add');
    Route::post('admin/event/add', [EventController::class, 'store'])->name('admin.event.store');
    Route::get('admin/event/edit/{event}', [EventController::class, 'edit'])->name('admin.event.edit');
    Route::post('admin/event/edit/{event}', [EventController::class, 'update'])->name('admin.event.update');
    Route::delete('/admin/event/delete/{event}', [EventController::class, 'destroy'])->name('admin.event.delete');

    // User Routes 
    Route::get('admin/user/list', [UserController::class, 'list']);
    Route::get('admin/user/add', [UserController::class, 'add']);
    Route::post('admin/user/add', [UserController::class, 'insert']);
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('admin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('admin/user/delete/{id}', [UserController::class, 'delete']);
});

/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
