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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ActorsRecorde', 'HomeController@ActorsRecorde');
Route::get('/exams/{id}', 'ExamController@index');
Route::post('/exams/session/', 'ExamController@EnsureAnswers');
Route::get('/queryresult','ExamResultControllre@index');
Route::post('/studentresult','ExamResultControllre@Student_result');
Route::get('/sendSMS',function (){
/*
    Nexmo::message()->send([
        'to'   => '9647806999205',
        'from' => 'Exminer',
        'type' => 'unicode',
        'text' => 'مرحبا بك'
    ]);
*/


});
