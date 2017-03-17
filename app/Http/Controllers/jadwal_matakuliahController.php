<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController<br>'tambah' ngga bisa nampil :'( ";
    }
    public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$jadwal_matakuliah = new jadwal_matakuliah();
	$jadwal_matakuliah->username = 'Novel';
	$jadwal_matakuliah->password = 'novel';
	$jadwal_matakuliah->save();
	return "data dengan username {$jadwal_matakuliah->username} telah disimpan";
}
}
