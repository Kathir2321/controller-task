<?php

use App\Http\Controllers\usercontroller;
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

Route::get('/',[usercontroller::class,'index']);
Route::post('/store',[usercontroller::class,'insert']);

// Route::prefix('/gp')->group(function (){
//     Route::get('traine',function(){
//         return 'hello im traine';
//     });
//     Route::get('employee',function(){
//         return 'hello im employee';
//     });
//     Route::get('hr',function(){
//         return 'hello im hr';
//     });

// });



