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

Route::get('/', 'HomeCtrl@home');

Route::get('login','LoginCtrl@login');
Route::post('login','LoginCtrl@validateLogin');
Route::get('/logout', function (){
    Session::flush();
    return redirect('login');
});
Route::get('/doctor/dashboard','doctor\HomeCtrl@index');
Route::get('/doctor/hospital','doctor\HospitalCtrl@index');
Route::get('/doctor/hospital/{id}','doctor\HospitalCtrl@info');
Route::post('/doctor/hospital','doctor\HospitalCtrl@saveHospital');
Route::put('/doctor/hospital/{id}','doctor\HospitalCtrl@update');
