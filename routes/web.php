<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Streaming\Representation;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CctvController;
use App\Models\Cctv;
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
    $data = Cctv::paginate(6);
    return view('index',['data'=>$data]);
})->name('index');


Route::get('/search_cctv', function () {
    $data = Cctv::where('lokasi','LIKE','%'.$_GET['search'].'%')->paginate(6);
    return view('index',['data'=>$data]);
})->name('search_cctv');



Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/test', function () {

    return view('stream');

})->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/data_geo', function () {
    $data = Cctv::where('latitude','!=',NULL)->where('longitude', '!=', NULL)->get();
    return response()->json($data, 200);
})->name('data_geo');



require __DIR__.'/auth.php';


Route::prefix('cctv')->name('cctv.')->group(function () {
    // crud routing
    Route::get('/', [CctvController::class,'index'])->name('index');
    Route::get('/create', [CctvController::class,'create'])->name('create');
    Route::post('/store', [CctvController::class,'store'])->name('store');
    Route::get('/{id}/edit', [CctvController::class,'edit'])->name('edit');
    Route::post('/{id}/update', [CctvController::class,'update'])->name('update');
    Route::get('/{id}/delete', [CctvController::class,'destroy'])->name('delete');
});

