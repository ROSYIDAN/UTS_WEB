<?php
use App\Http\Controllers\Admin\{AuthController,ProfileController,UserController};
use App\Http\Controllers\PortofolioController;
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

Route::get('admin/login',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('admin/login',[AuthController::class,'postLogin'])->name('postLogin');


Route::group(['middleware'=>['admin_auth']],function(){
    Route::get('admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
    Route::get('admin/users',[UserController::class,'index'])->name('users.index');
    Route::get('admin/logout',[ProfileController::class,'logout'])->name('logout');
    
});
Route::resource('portofolios',PortofolioController::class);
// Route::get('delete/{id}', DeleteController::class);

