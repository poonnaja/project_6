<?php
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//rout อาจารย์สา
// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('promotepage.home');



Auth::routes();
//profiles
Route::get('/home', [HomeController::class, 'index'])->name('home');
//admin
Route::get('admin/index',[HomeController::class,'admin'])->name('admin');
//category
Route::get('/admin/category/index',[CategoryController::class,'index'])->name('category');
Route::get('/admin/category/create',[CategoryController::class,'createform'])->name('category.create');
//Users
Route::get('/admin/user/index',[UserController::class,'index'])->name('user');
//product
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');
//contents
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');
//about
Route::get('/admin/product/index',[ProductController::class,'index'])->name('product');
Route::get('/admin/product/create',[ProductController::class,'createform'])->name('product.create');
