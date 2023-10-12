<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Index\indexController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

//Rotas da página de administrador
//filmes
Route::get('/admin/deleteFilm/{id}', [AdminController::class, 'deleteFilm'])->name('admin.deleteFilm');
Route::put('/admin/upadteFilm/{id}', [AdminController::class, 'updateFilm'])->name('admin.updateFilm');
Route::get('/admin/editFilm/{id}', [AdminController::class, 'editFilm'])->name('admin.editFilm');
Route::post('/admin/saveFilm', [AdminController::class, 'saveFilm'])->name('admin.saveFilm');
Route::get('/admin/addFilm', [AdminController::class, 'addFilm'])->name('admin.addFilm');
//sessões
Route::get('/admin/deleteSession/{id}', [AdminController::class, 'deleteSession'])->name('admin.deleteSession');
Route::put('/admin/upadteSession/{id}', [AdminController::class, 'updateSession'])->name('admin.updateSession');
Route::get('/admin/editSession/{id}' , [AdminController::class, 'editSession'])->name('admin.editSession');
Route::post('/admin/saveSession', [AdminController::class, 'saveSession'])->name('admin.saveSession');
Route::get('/admin/addSession', [AdminController::class, 'addSession'])->name('admin.addSession');
Route::get('/admin', [AdminController::class, 'Index'])->name('admin.Index');

//Rotas para as páginas e métodos de User 
Route::post('/create_employee/save_employee', [UserController::class, 'Save_Employee'])->name('create_employee.Save_Employee');
Route::post('/create_user/save_client', [UserController::class, 'Save_Client'])->name('create_user.Save_Client');
Route::get('/create_employee', [UserController::class, 'Create_Employee'])->name('create_employee.Create_Employee');
Route::get('/create_user', [UserController::class, 'Create_User'])->name('create_user.Create_User');
Route::post('/login/Authentication', [UserController::class, 'Authentication'])->name('login.Authentication');
Route::get('/login', [UserController::class, 'Login'])->name('login.Login');

//Rotas do cliente/index
Route::get('/', [indexController::class, 'index'])->name('index.index');
