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

Route::get('/hello-world', function(){
    return view('hello_world');
});

Route::get('/about_us', function(){
    $records = [];
    // $records[] = 1;
    $records[] = 2;
    // $records[] = 3;


    $users = array();
    $users[] = 1;
    $users[] = 2;
    $users[] = 3;
    $users[] = 4;

    // $users_obj = new stdClass();
    // foreach ($users as $key => $value)
    // {
    //     $users_obj->$key = $value;
    // }

    return view('about_us', ['name'=>'Laravel 6.0 範例', 'records'=>$records, 'users'=>$users]);
});


