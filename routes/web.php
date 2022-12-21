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

Route::get('/',function(){
    $saluto = 'Hello Laravel!';

    $isTrue = false;

    $data = ['saluto'=>$saluto, 'isTrue'=>$isTrue];

    return view('home', $data);
});

Route::get('/contact', function(){
    $contacts = [
        [
            'name'=>'Mel',
            'surname'=>'Mel',
            'email'=>'Mel@@',
            'age'=> 28,
        ],
        [
            'name'=>'Melpp',
            'surname'=>'Melu',
            'email'=>'Mel@@',
            'age'=> 280,
        ],
        [
            'name'=>'Meloooo',
            'surname'=>'MelLLLLL',
            'email'=>'Mel@@',
            'age'=> 2800,
        ],
        ];


    return view('contact', compact('contacts'));
});
