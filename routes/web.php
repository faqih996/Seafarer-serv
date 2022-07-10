<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProfileAdminController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\PositionGalleryController;


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
Route::get('/detail', [DetailController::class,'index'])->name('detail');
// middleware(['auth', 'admin'])

Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
        // Route::get('my-profile', [ProfileController::class,'profile'])->name('my-profile');
        Route::resource('profile', [ProfileController::class,'profile']);
        Route::resource('documents', DocumentsController::class);
        Route::resource('education', EducationController::class);
        Route::resource('experience', ExperienceController::class);
        Route::resource('emergency', EmergencyController::class);
});

// Route::prefix('member')
//     ->middleware(['auth', 'user'])
//     ->group(function{
//         Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
//         Route::resource('profile', ProfileController::class);
//         Route::resource('documents', DocumentsController::class);
//         Route::resource('education', EducationController::class);
//         Route::resource('experience', ExperienceController::class);
//         Route::resource('emergency', EmergencyController::class);
//     });

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', [DashboardAdminController::class,'index'])->name('admin-dashboard');
        Route::resource('user', UserController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);
        Route::resource('products-gallery', ProductGalleryController::class);
        Route::resource('profiles', ProfileAdminController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('position', PositionController::class);
        Route::resource('positions-galleries', PositionGalleryController::class);

    });

Auth::routes();
