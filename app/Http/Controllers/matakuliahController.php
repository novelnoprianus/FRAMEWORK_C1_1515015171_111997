<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;
class matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari matakuliahController<br>'tambah' ngga bisa nampil :'( ";
    }
    public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$matakuliah = new matakuliah();
	$matakuliah->username = 'Novel';
	$matakuliah->password = 'novel';
	$matakuliah->save();
	return "data dengan username {$matakuliah->username} telah disimpan";
}
}
