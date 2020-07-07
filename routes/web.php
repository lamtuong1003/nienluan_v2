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





Route::get('/','HomeController@getLogin')->name('login');

Route::post('/','HomeController@postLogin')->name('postlogin');
//
//Route::get('/Task','HomeController@getSignin')->name('signin');
//Route::post('/Task','HomeController@postSignin')->name('signin');
//
Route::get('/attendance','HomeController@getAttendance')->name('attendance');

Route::get('/search','HomeController@getSearch')->name('search');
Route::get('/class','HomeController@getstudentClass');


//insert user ltdao vao bang users
//Route::get('/insert',function(){
//    DB::insert('insert into users(TenGV,EmailGV,password,SDTGV,Gioitinh) values(?,?,?,?,?)',['Luu Tien Dao','ltdao@gmail.com','123456','123456789','Nam']);
//    return 'Done';
//});

//Route::get('/',[
//    'as'=>'signin',
//    'uses'=>'HomeController@getSignin'
//]);

Route::get('/attendance/read','HomeController@getListChecking')->name('read');









//route:: group(['namespace'=>'auth'],function() {
//    route::group(['prefix' => 'logging'], function () {
//        route::get('/', 'LoginController@getLogin');
//    });
//});


