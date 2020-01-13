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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/', function () {
//     $tasks = [
//         'Go to store',
//         'Go to school',
//         'Go to work',                
//         'Go to theatre'        
//     ];
//     // return and load the welcome view, and give that view a variable called tasks...
//     return view('welcome', [
//         'tasks' => $tasks,
//         'foo' => '<script>alert("foo passed to the welcome view....")</script>',
//         'foo2' => request('title','defaulted')

//     ]);
// });
