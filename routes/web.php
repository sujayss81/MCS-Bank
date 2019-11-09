<?php

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
    return view('login');
});

Route::post('/auth','appController@auth');
Route::view('/home','home')->middleware('cls');
Route::view('/registration','registration')->middleware('cls');
Route::post('/registration/add','appController@reg')->middleware('cls');
Route::view('/registration/claimants','claimants')->middleware('cls');
Route::post('/registration/addClaim','appController@creg')->middleware('cls');
Route::get('/view/members','appController@viewm')->middleware('cls');
Route::get('/view/claimants','appController@viewc')->middleware('cls');
Route::get('home/logout','appController@logout')->middleware('cls');
