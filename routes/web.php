<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\VendorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//ADMIN 
Route::middleware(['auth','role:admin'])->group(
    function(){
        #Admin Routes
        Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
        
        Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

        #MAILS
        //SHOW MAILS INDEX
        Route::get('admin/mail/index',[MailController::class,'index'])->name('admin.mail.index');        
        //SHOW MAIL CREATION FORM
        Route::get('admin/mail/create',[MailController::class,'create'])->name('admin.mail.create');
        //STORE MAIL
        Route::post('admin/mail/store',[MailController::class,'store'])->name('admin.mail.store');
    }
);

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');

//VENDOR
Route::middleware(['auth','role:vendor'])->group(
    function(){
        #Vendor Routes
        Route::controller(VendorController::class)->group(
            function(){
                Route::get('vendor/dashboard','dashboard')->name('vendor.dashboard');
            }
        );
    }
);


