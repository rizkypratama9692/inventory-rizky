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
Route::get('/hello', function () {
    return "Hello World";
});
Route::get('/name/{name}', function ($name) {
    return "Hello {$name}";
});
// Route::get('/data/{data?}', function ($data = "Kosong") {
//     return "Isi parameter = {$data}";
// });
Route::get('/name/{name}', function ($name) {
    return "Nama = {$name}";
})->where('name', '[A-Za-z]+');
// studi kasus
// Route::get('/{NRP}&{Nama}', function ($NRP, $Nama) {
//     if(is_numeric($NRP) && ctype_alpha($Nama)){
//         return "NRP = {$NRP}, Nama = {$Nama}";
//     }elseif(is_numeric($NRP) && !ctype_alpha($Nama)){
//         return "NRP = {$NRP} dan Nama bukan alphabet";
//     }elseif(!is_numeric($NRP) && ctype_alpha($Nama)){
//         return "NRP bukan angka dan Nama = {$Nama}";
//     }else{
//         return "NRP bukan angka dan nama bukan alphabet";
//     }
// });
Route::get('/{NRP}&{Nama}', function ($NRP, $Nama) {
    return "NRP = {$NRP}, Nama = {$Nama}";

})-> where(['name' => '[A-Za-z]+', 'NRP' => '[0-9]+'
]);;

Route::get('/cekbilangan/{bilangan}', function ($bilangan) {
    if($bilangan %2 == 0){
        return "{$bilangan} merupakan genap";
    }else{
        return "{$bilangan} merupakan ganjil";
    }
});
Route::get('/deretbilangan/{bilangan}', function ($bilangan) {
    for ($i = 0; $i <= $bilangan; $i++){
        if($i % 2 == 0){
            echo "{$i} genap";
            echo "</br>";
        }else{
            echo "{$i} ganjil";
            echo "</br>";
        }
    }
});
Route::get('/logika/{awal}&{akhir}', function ($awal, $akhir) {
    if($awal > $akhir){
        return "Data Awal Tidak Boleh Lebih Besar";
    }else{
        $angka_awal = $awal;
        $angka_sebelumnya = 0;
        echo "{$angka_awal}";
        echo "<br/>";
        while($angka_sebelumnya <= $akhir){
            $angka_sekarang = $angka_awal + $angka_sebelumnya;
            echo "{$angka_sekarang}";
            echo "<br/>";

            $angka_sebelumnya = $angka_sekarang;
        }
    }
});

Route::get('/person', 'PersonController@index');
Route::get('/person/send-data', 'PersonController@sendData');
Route::get('/person/show/{param}', 'PersonController@show');
// Route::resource('/student', 'StudentController');
Route::get('/homepage', function () {
    return view('home', ['name' => "Fatah At Thariq"]);
});
Route::get('/person/data', 'PersonController@data');
Route::get('/student/my-academic/{course}/{task}/{quiz}/{mid_term}/{final}', 'StudentController@myCourse');
// Route::get('/person', function () {
//     return view('/layouts/app');
// });
Route::get('/person/add', 'PersonController@add');
Route::post('/person/addProcess', 'PersonController@addProcess');

