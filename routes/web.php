<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return Redirect::to('/abrir');
});

Route::get('/nueva',[CrudController::class,'new_register']);
Route::post('/nueva',[CrudController::class,'new_register_save']);

Route::get('/nueva/update',[CrudController::class,'update_register']);
Route::post('/nueva/update',[CrudController::class,'update_register_save']);
Route::get('/open_one_course/{id}',[CrudController::class,'open_one_course']);

Route::get('/abrir',[CrudController::class,'registers_list']);
Route::get('/fetch_all_courses',[CrudController::class,'fetch_all_courses']);

Route::get('/delete_course',[CrudController::class,'delete_course']);

