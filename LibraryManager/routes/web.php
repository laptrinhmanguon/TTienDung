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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello-world', function(){
//     echo "Hello work";
// });

// Route:: get('/hello/{ten?}',function($ten = 'Dung'){
//     echo 'Hello '.$ten;
// });

// Route:: get('/myroute/{ten?}',function($ten){

//     return "Chào bạn ".$ten;}
//     )->where([ "ten" => "*a-zA-Z++"]);

// Route:: get('/toi-la-document1',function(){

//     echo " tôi là router 1";}
//     )->name('document');

    Route::group(['prefix'=>'admin'],function(){
        Route:: group(['prefix'=>'bai-viet'], function(){
            Route::get('/', function(){
                echo ' danh sach';
            });
            Route::get('/them', function(){
                echo ' them';
            });
            Route::get('/cap-nhat', function(){
                echo 'cap nhat';
            });
        });
        Route::group(['prefix'=>'Category'], function(){
            Route::get('/', function(){
                echo ' danh muc';
            });
        });

    });

    Route::get('/view1/{ten}/{tuoi?}', function ($ten,$tuoi) {
        // $tuoi = 15;
        // if(view()-> exists('View1'))
        return view('View1',['ten'=> $ten, 'tuoi'=> $tuoi]);
        // echo 'vui lòng thêm view 1';
    });

    Route::get('category', [\App\Http\Controllers\Category::class, 'index']);
    Route::get('category/add', [\App\Http\Controllers\Category::class, 'add']);
    Route::get('category/update/{id}/{parrent?}', [\App\Http\Controllers\Category::class, 'update']);
    Route::get('category/delete',[\App\Http\Controllers\Category::class, 'delete']);
    Route::get('category/get-data',[\App\Http\Controllers\Category::class, 'GetData']);
    Route::get('category/lay-thong-tin',[\App\Http\Controllers\Category::class, 'GetData']);
    Route::get('category/set-cookie',[\App\Http\Controllers\Category::class, 'SetCookie']);
    Route::get('category/get-cookie',[\App\Http\Controllers\Category::class, 'GetCookie']);
    Route::get('category/upload',[\App\Http\Controllers\Category::class, 'Upload']);


    Route::get('detail',[\App\Http\Controllers\PostController::class, 'detail']);

//    Library index
    Route::get('/',[\App\Http\Controllers\SachController::class, 'index']);
    Route::get('seach',[\App\Http\Controllers\SeachController::class, 'index']);
    Route::get('muontra',[\App\Http\Controllers\MuonTraController::class, 'index']);
    Route::get('docgia',[\App\Http\Controllers\DocGiaController::class, 'index']);


//  Library add
Route::post('/add-sach', [\App\Http\Controllers\SachController::class, 'add']);
Route::post('/add-muon', [\App\Http\Controllers\MuontraController::class, 'add']);
Route::post('/add-docgia', [\App\Http\Controllers\DocgiaController::class, 'add']);


//  Library delete
Route::delete('/sach/delete/{id}', [\App\Http\Controllers\SachController::class, 'delete']);
Route::delete('/muon-tra/delete/{id}', [\App\Http\Controllers\MuontraController::class, 'delete']);
Route::delete('/doc-gia/delete/{id}', [\App\Http\Controllers\DocgiaController::class, 'delete']);
