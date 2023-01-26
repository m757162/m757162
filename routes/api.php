<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteMake;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/testt',function(request $request){
    $ck=$request->method();
   if($ck){
       return "it is ".$ck ." method";
   }else{
       echo "not process";
   }
 });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/vv', function (Request $request) {
//     return view('about');
// });



Route::get('/student',[siteMake::class,'index']);
Route::get('/store',[siteMake::class,'store']);
Route::get('/student_add', function () {
   return view('student.student_add');
});

Route::get('/student_update/{id}',[siteMake::class,'student_update']);
Route::put('/data_update/{id}',[siteMake::class,'data_update']);