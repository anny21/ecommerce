<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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



Route::group(['domain' => '{domain}.ecommerce2.test'], function($domain){
    Route::get('/', function($domain){
     $user =  App\Models\User::whereDomainPrefix($domain)->first();
     if($user){
        return view('template.index');
     }else{
        abort(404);
     }
        
    })->name('shop');
});
Route::group(['domain' => 'ecommerce2.test'], function(){
Route::get('/', function () {
        return view('welcome');
});

Auth::routes();

Auth::routes(['verify' => true]);
Route::group(['prefix' => 'dashboard'], function(){

    Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('verified');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('category.create')->middleware('verified');
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index')->middleware('verified');

});
});
