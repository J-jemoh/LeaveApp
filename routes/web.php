<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeavesController;
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
    return view('auth.login');
});
// Route::get('/dashboard',function(){

//     return view('pages.index');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#dashboard routes
Route::prefix('/dashboard')->middleware('auth')->group(function(){

    Route::get('/',[PagesController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/All-employees',[PagesController::class,'allEmployees'])->name('admin.employees');
    Route::get('/Add-Employee',[PagesController::class,'addEmployee'])->name('admin.addEmployee');
    Route::get('/AllLeaves',[PagesController::class,'allLeaves'])->name('admin.allLeaves');
    Route::get('/addLeaves',[PagesController::class,'addLeave'])->name('admin.addLeave');
    Route::get('/ApprovedLeaves',[PagesController::class,'approvedLeave'])->name('admin.approvedLeave');
    Route::get('/PendingLeaves',[PagesController::class,'pendingLeave'])->name('admin.pendingLeave');
    Route::get('/RejectedLeaves',[PagesController::class,'rejectedLeave'])->name('admin.rejectedLeave');


    #employe routes
    Route::prefix('/employee')->group(function(){
        Route::post('/add',[EmployeeController::class,'addEmployee'])->name('admin.emp.add');
        Route::get('/view/{id}',[EmployeeController::class,'viewEmployee'])->name('admin.emp.view');
        Route::get('/edit/{id}',[EmployeeController::class,'editEmployee'])->name('admin.emp.edit');
        Route::post('/edit/{id}',[EmployeeController::class,'updateEmployee'])->name('admin.emp.update');
        Route::get('/delete/{id}',[EmployeeController::class,'deleteEmployee'])->name('admin.emp.delete');

    });

    #leave routes
    Route::prefix('/leaves')->group(function(){
        Route::post('/appy',[LeavesController::class,'addLeave'])->name('admin.leave.apply');
        Route::get('/view/{id}',[LeavesController::class,'viewLeave'])->name('admin.leave.view');
        Route::get('approve/{id}',[LeavesController::class,'approveLeave'])->name('admin.approve.leave');
        Route::get('approvedleaves',[LeavesController::class,'approvedLeaves'])->name('admin.approved.leave');
    });
});
