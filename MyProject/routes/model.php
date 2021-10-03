<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/model/author'], function(){
    Route::get('/index', [\App\Http\Controllers\Model\AuthorController::class, 'index']);
    Route::get('/view_add', [\App\Http\Controllers\Model\AuthorController::class, 'viewAdd']);

});