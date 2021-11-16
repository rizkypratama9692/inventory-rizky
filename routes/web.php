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
    return view('layouts.app');
});

Route::get('/hello', function () {
    echo "Hello World";
});

//Route::get('/name/{nrp}/{name}', function ($nrp, $nama) {
//    if (is_numeric($nrp) && ctype_alpha($nama)){
//        return $nrp . " - " . $nama;
//    }
    //echo "Hello " $nrp ." - ". $name . "!";
//});

Route::get('/data/{data?}', function ($data = "Kosong") {
    echo "Isi parameter = " . $data;
});

Route::get('/name/{nrp}/{name}', function ($nrp, $nama) {
    return $nrp . " - " . $nama;
    
})->where (['name' => '[A-Za-z]+', 'nrp' => '[0-9]+']);


Route::get('/name/{nrp}/{name}/{bilangan}', function ($nrp, $nama, $bilangan) {
    if($bilangan %2 == 0){
        return $bilangan . " adalah bilangan genap." . $nrp . " - " . $nama;
    }else{
        return $bilangan . " adalah bilangan ganjil." . "(" . $nrp . " - " . $nama . ")";
        return $nrp . " - " . $nama;
    }
    return $nrp . " - " . $nama;
    
})->where (['name' => '[A-Za-z]+', 'nrp' => '[0-9]+']);

Route::get('/deretbilangan/{bilangan}', function ($bilangan) {
    for ($i=0; $i <= $bilangan; $i++){
        echo $i;
    }
});

Route::get('/person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@show');
Route::resource('/student', 'StudentController');

Route::get('/homepage', function () {
    return view('home', ["name" => "Rizky"]);
});
Route::get('person/sendData', 'PersonController@sendData');
Route::get('/student/myacademic/{course}/{task}/{quiz}/{mid_term}/{final}', [StudentController::class,'myCourse']);
