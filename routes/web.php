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
Auth::routes();
Route::get('/', function () {
    return view('chat');
})->middleware('auth');
// Route::post('/','maincontroller@index1');
// Route::get('test', function () {
//     // this checks for the event
//     return view('test');
// });
// Route::get('/{id}',function ($id) {})->uses('maincontroller@id');
// Route::get('fire', function () {
//     // this fires the event
//     event(new App\Events\notifyevent());
//     return "event fired";
// });

Route::get('send', function () {
    broadcast(new \App\Events\messagesent($user, $message))->toOthers();
});