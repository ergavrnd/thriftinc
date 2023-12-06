<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ArrivedController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DeliverController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PackingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Signup2Controller;
use App\Http\Controllers\HomeadminController;
use App\Http\Controllers\AddcatalogController;
use App\Http\Controllers\CatalogAdmController;
use App\Http\Controllers\forgotpassController;
use App\Http\Controllers\HistorycusController;
use App\Http\Controllers\LoginadminController;
use App\Http\Controllers\Addcatalog2Controller;
use App\Http\Controllers\Addcatalog3Controller;
use App\Http\Controllers\CategoryAdmController;
use App\Http\Controllers\DetailtrackController;
use App\Http\Controllers\Forgotpass2Controller;
use App\Http\Controllers\TranscationController;
use App\Http\Controllers\JasaKirimAdmController;
use App\Http\Controllers\DetailtransactionController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/catalog/{slug}', [CatalogController::class, 'index'])->middleware('auth');

Route::get('/updatecatalog/{slug}', [CatalogController::class, 'viewupdate'])->middleware('admin');

Route::get('/cart/{slug}', [CartController::class, 'show'])->middleware('auth');

Route::get('/catalogadmin/{slug}', [CatalogAdmController::class, 'index'])->middleware('admin');

Route::get('/cartdelete', [BarangController::class, 'delete'])->middleware('admin');

Route::get('/updatecart/{slug}', [BarangController::class, 'viewupdate'])->middleware('admin');

Route::post('/updatecart', [BarangController::class, 'update'])->middleware('admin');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/signup',[SignupController::class, 'index'])->middleware('guest');
Route::post('/signup',[SignupController::class, 'store'])->middleware('guest');

Route::get('/homeadmin', [HomeadminController::class,'index'])->middleware('admin');

Route::post('/createbarang', [BarangController::class,'store'])->middleware('admin');

Route::get('/addcatalog/{slug}', [BarangController::class,'create'])->middleware('admin');
Route::get('/createslugbarang', [BarangController::class, 'checkSlug'])->middleware('admin');


Route::get('/about', [AboutController::class,'index']);

Route::get('/transcation', [TranscationController::class,'index'])->middleware('auth');

Route::get('/detailtransaction', [DetailtransactionController::class,'index']);

Route::get('/detailtrack', [DetailtrackController::class,'index']);

Route::get('/profile', [ProfileController::class,'index']);

Route::get('/editprofile', [ProfileController::class,'edit'])->middleware('auth');
Route::post('/editprofile', [ProfileController::class,'update'])->middleware('auth');

Route::get('/packing', [PackingController::class,'index']);

Route::get('/pickup', [PickupController::class,'index']);

Route::get('/deliver', [DeliverController::class,'index']);

Route::get('/arrived', [ArrivedController::class,'index']);

Route::get('/historycus', [BarangController::class,'index'])->middleware('auth');

Route::get('/jasakirim', [JasaKirimAdmController::class, 'index'])->middleware('admin');

Route::get('/addjasakirim', [JasaKirimAdmController::class, 'viewcreate'])->middleware('admin');

Route::post('/submitjasakirim', [JasaKirimAdmController::class, 'store'])->middleware('admin');

Route::get('/jaskirdelete', [JasaKirimAdmController::class, 'delete'])->middleware('admin');

Route::get('/viewupdatejaskir/{slug}', [JasaKirimAdmController::class, 'viewupdate'])->middleware('admin');

Route::post('/updatejasakirim', [JasaKirimAdmController::class, 'update'])->middleware('admin');

Route::get('/createslugjaskir', [JasaKirimAdmController::class, 'checkSlug'])->middleware('admin');



Route::get('/categoryadm', [CategoryAdmController::class, 'index'])->middleware('admin');

Route::get('/categorydelete', [CategoryAdmController::class, 'delete'])->middleware('admin');

Route::get('/addcategory', [CategoryAdmController::class, 'viewcreate'])->middleware('admin');

Route::post('/createcategory', [CategoryAdmController::class, 'store'])->middleware('admin');

Route::get('/viewupdatecategory/{slug}', [CategoryAdmController::class, 'viewupdate'])->middleware('admin');

Route::post('/updatecategory', [CategoryAdmController::class, 'update'])->middleware('admin');

Route::get('/createslugcategory', [CategoryAdmController::class, 'checkSlug'])->middleware('admin');



Route::get('/co', [CoController::class,'index'])->middleware('auth');
Route::post('/co', [CoController::class,'store'])->middleware('auth');

Route::post('/codelete', [CoController::class,'destroy'])->middleware('auth');


