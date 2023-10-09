<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  //  return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/mahasiswa/{nama?}',function ($nama = "Satria") {
    echo "<h1>Halo nama saya $nama</h1>";
});

Route::get('/profil/{nama?}/{pekerjaan?}',function ($nama = 'Satria',$pekerjaan='Mahasiswa') {
    echo "<h1>Halo nama saya $nama dan Pekerjaan Saya Adalah $pekerjaan</h1>";
});


//redirect 
Route::get('/hubungi',function() {
    echo"<h1>Hubungi Kami </h1>";
})->name ("call");
 
Route::redirect("/contact","/hubungi");

Route::get("halo",function() {
echo "<a href ='" . route('call') . "'>" . route('call') . "</a>";
});

Route::prefix("dosen")->group(function() {
    Route::get("/jadwal",function() {
        echo"<h1> Jadwal Dosen </h1>";
    });
    Route::get("/materi",function(){
        echo"<h2>Materi Perkuliahan </h2>";
    });

});