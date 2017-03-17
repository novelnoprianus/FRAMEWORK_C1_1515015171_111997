<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dosen_matakuliahController extends Controller
{
     public function awal()
    {
    	return "Hello dari dosen_matakuliahController<br'tambah' ngga bisa nampil :'( ";
    }
     public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen_matakuliah = new dosen_matakuliah();
	$dosen_matakuliah->username = 'Novel';
	$dosen_matakuliah->password = 'novel';
	$dosen_matakuliah->save();
	return "data dengan username {$dosen_matakuliah->username} telah disimpan";
}
}
