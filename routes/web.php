<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\HomeController;


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

Route::get('/welcome', function 
() { echo "Welcome"; 
});

// tugas route 1
Route::get('/tes',function () {
    return view('welcome');
} );

// tugas route 2
Route::get('/show/{id}', function ($id) { 
    echo  "Nilai Parameter
    Adalah  ".$id; 
});

// tugas route 3
Route::get('/show/{id?}', function ($id=1)  { 
    echo "Nilai  Parameter Adalah  ".$id;
});

// tugas route 4
Route::get('/edit/{nama}', function  ($nama)  {
    echo "Nilai Parameter Adalah ".$nama; })
    ->where('nama','[A-Za-z]+');

// tugas route 5
    Route::get('/index', function () {
        echo "<a href='".route('create').
        "'>Akses Route dengan nama </a>"; 
    });
        Route::get('/create', function () {
            echo "Route diakses menggunakan nama";
        })
        ->name('create');  
            

Route::get('/tampil/{nama}',function ($nama) {
    return "hai nama saya adalah ". $nama;
});

// produk

Route::get('/halo',[ContohController::class,'index']);

Route::get('/produk',[ProdukController::class,'index']);

Route::get('/show',[ProdukController::class,'show']);

// layout blade
Route::get('/halaman',function(){
    $title = 'Harry Pooter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('konten.halaman',compact('title','konten'));
   });

// DB Query
Route::get('/tampil',[ProdukController::class,'tampil']);

//    menampilkan kategori eloquent
Route::get('/kategori',[ProdukController::class,'show_eloquent']);
Route::get('/insert',[ProdukController::class,'insert_eloquent']);
Route::get('/update',[ProdukController::class,'update_eloquent']);


// CRUD
Route::resource('barang', BarangController::class);

// uts CRUD
Route::resource('perpustakaan', PerpustakaanController::class);

// praktisi

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);

// verifikasi email user

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['logincheck:admin']], function() {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function() {
        Route::resource('editor', EditController::class);
});
});

