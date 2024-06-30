<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use app\http\Controllers\Democontroller;
use App\Http\Controllers\RegistrationController;
use App\Models\Customers;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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
Route::get('/',function(){
    return view('index');
});


Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer', [CustomerController::class, 'index'])->name('customer_create');
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer/view', [CustomerController::class, 'view']); // Changed to a unique path
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer_delete');
Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name("customer_edit");
Route::post('/customer/update{id}',[CustomerController::class,'update'])->name('customer_update');