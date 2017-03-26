<?php
use App\pengguna;
use App\matakuliah;
use App\ruangan;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna','penggunaController@awal');
Route::get('pengguna/tambah','penggunaController@tambah');

//$pengguna = new pengguna();
//	$pengguna->username = 'Novel';
//	$pengguna->password = 'novel';
//	$pengguna->save();
//	return "data dengan username {$pengguna->username} telah disimpan";

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('pengguna/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('matakuliah/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

Route::get('ruangan/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');