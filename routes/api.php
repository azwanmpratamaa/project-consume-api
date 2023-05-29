<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});
// ambil semua data
Route::get('/students', [StudentController::class, 'index']);
// tambah data baru
Route::post('/students/tambah-data', [StudentController::class, 'store']);
// generate token csrf
Route::get('/generate-token', [StudentController::class, 'createToken']);
// ambil satu data spesifik
Route::get('/students/{id}', [StudentController::class, 'show']);
// mengubah data tertentu
Route::patch('/students/update/{id}', [StudentController::class, 'update']);
// menghapus data tertentu
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy']);
// menampilkan se;uruh data yang sudah dihapus sementara oleh softdeletes
Route::get('/students/show/trash', [StudentController::class, 'trash']);
// mengembalikan data spesifik yang sudah di hapus
Route::get('/students/trash/restore/{id}', [StudentController::class, 'restore']);
// mengapus permanen data tertentu
Route::get('/students/trash/delete/permanent/{id}', [StudentController::class, 'permanentDelete']);