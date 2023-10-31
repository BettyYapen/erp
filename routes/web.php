<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\BomController;
use App\Http\Controllers\AuthController;

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
    return view('dashboard');
});
//Inventory
Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/tambah', [InventoryController::class, 'create']);
Route::post('/inventory/store', [InventoryController::class, 'store']);
Route::get('/inventory/cetak', [InventoryController::class, 'cetak'])->name('inventory');
Route::get('/inventory/edit/{id_bahan}', [InventoryController::class, 'edit']);
Route::put('/inventory/update/{id_bahan}', [InventoryController::class, 'update']);
Route::get('/inventory/delete/{id_bahan}', [InventoryController::class, 'delete']);
Route::get('/inventory/destroy/{id_bahan}', [InventoryController::class, 'destroy']);
Route::get('/inventory/trash', [InventoryController::class, 'trash']);
Route::get('/inventory/restore/{id_bahan?}', [InventoryController::class, 'restore']);
Route::get('/inventory/deleteall/{id_bahan?}', [InventoryController::class, 'deleteall']);
//Manufacture
Route::get('/manufacture', [ManufactureController::class, 'index']);
Route::get('/manufacture/tambah', [ManufactureController::class, 'create']);
Route::post('/manufacture/store', [ManufactureController::class, 'store']);
Route::get('/manufacture/cetak', [ManufactureController::class, 'cetak'])->name('produksi');
Route::get('/manufacture/edit/{id_produk}', [ManufactureController::class, 'edit']);
Route::put('/manufacture/update/{id_produk}', [ManufactureController::class, 'update']);
Route::get('/manufacture/delete/{id_produk}', [ManufactureController::class, 'delete']);
Route::get('/manufacture/destroy/{id_produk}', [ManufactureController::class, 'destroy']);
Route::get('/manufacture/trash', [ManufactureController::class, 'trash']);
Route::get('/manufacture/restore/{id_produk?}', [ManufactureController::class, 'restore']);
Route::get('/manufacture/deleteall/{id_produk?}', [ManufactureController::class, 'deleteall']);

Route::get('/product/bom', [BomController::class,'material']);
Route::get('/product/bom/delete/{id}', [BomController::class,'hapus']);
Route::get('/product/bom-input', [BomController::class,'materialInput']);
route::get('/product/cetak', [BomController::class, 'cetak'])->name('bom');
route::get('/bom/cetak', [BomController::class, 'cetak'])->name('bom');
Route::post('/product/bom-input', [BomController::class,'upload']);
Route::get('/bom/cetak/detail/{kode_bom}', [BomController::class,'cetak_item']);
Route::get('/product/bom-input-item/{kode_bom}', [BomController::class,'materialInputItems']);
Route::post('/product/bom-input-item', [BomController::class,'uploadList']);
Route::get('/product/bom-delete-item/{kode_bom_list}', [BomController::class,'deleteList']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['guest'])->group(function () {
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/post-register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/post-login', [AuthController::class, 'login']);
});


