<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\PositionGalleryController;
use App\Http\Controllers\Admin\UserController;


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
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/detail', [DetailController::class,'index'])->name('detail');
Route::resource('profile', ProfileController::class);
Route::resource('documents', DocumentsController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('emergency', EmergencyController::class);

// Route::get('/admin', [DashboardAdminController::class,'index'])->name('admin-dashboard');
// Route::resource('department', DepartmentController::class);

// middleware(['auth', 'admin'])

Route::prefix('admin')
    ->group(function(){
        Route::get('/', [DashboardAdminController::class,'index'])->name('admin-dashboard');
        Route::resource('user', UserController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('position', PositionController::class);
        Route::resource('positions-galleries', PositionGalleryController::class);
        Route::resource('documentsAdmin', DocumentsController::class);

    });

Auth::routes();
