<?php
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



// Route::get('/', function () {
//    // return view('Frontend\FrontController');
// });


Route::get('admin', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

 Route::get('admin/dashboard', ['as' => 'admindashboard', 'uses' => 'Admin\Dashboard\DashboardController@dashboard']);

Route::post('login', ['as'=>'login' ,'uses'=>'Admin\AdminController@Check_login']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\AdminController@logout']);

Route::get('error', ['as' => 'error', 'uses' => 'Admin\AdminController@error']);


Route::get('/', ['as' => 'home', 'uses' => 'Frontend\FrontController@index']);


