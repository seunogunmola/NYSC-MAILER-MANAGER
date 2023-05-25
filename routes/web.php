<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OperationController;
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
    $pageTitle = 'Login';
    return view('/admin/login',compact('pageTitle'));
});

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

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
        Route::controller(MailController::class)->group(
            function(){
                //ALL MAILS
                Route::get('admin/mail/index','index')->name('admin.mail.index'); 

                // EDIT MAIL 
                Route::get('/admin/mail/edit/{uniqueid}','edit')->name('admin.mail.edit');

                // UPDATE MAIL
                Route::post('/admin/mail/update/{id}','update')->name('admin.mail.update'); 
                       
                //SHOW MAIL CREATION FORM
                Route::get('admin/mail/create','create')->name('admin.mail.create');
                //STORE MAIL
                Route::post('admin/mail/store','store')->name('admin.mail.store');     
                
                Route::get('/admin/mail/delete/{id}','destroy')->name('admin.mail.delete');

                Route::get('/admin/main/view/{uniqueid}','view')->name('admin.mail.view');
            }
        );

        #CATEGORIES
        Route::controller(CategoryController::class)->group(
            function(){
                Route::get('/admin/category/list','index')->name('admin.category.list');
                Route::get('/admin/category/create','create')->name('admin.category.create');
                Route::post('/admin/category/store','store')->name('admin.category.store');
                Route::get('/admin/category/edit/{uniqueid}','edit')->name('admin.category.edit');
                Route::get('/admin/category/delete/{id}','destroy')->name('admin.category.delete');
                
            }
        );


        #OPERATONS
        Route::controller(OperationController::class)->group(
            function(){
                Route::get('/admin/operations/upload','excel')->name('admin.excel.upload');
                Route::post('/admin/operation/storeExcel','storeExcel')->name('admin.excel.store');

                Route::get('/admin/operation/backup','backup')->name('admin.database.backup')->name('admin.database.backup');
            }
        );

        #DESTINATIONS
        Route::controller(DestinationController::class)->group(
            function(){
                Route::get('/admin/destinations/create','create')->name('admin.destinations.create');
                Route::get('/admin/destinations/view','index')->name('admin.destinations.list');

                Route::post('/admin/destinations/store','store')->name('admin.destinations.store');
            }
        );


        
    }
);

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');

Route::controller(AdminController::class)->group(
    function(){
        Route::get('/import','import');
    }
);

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


