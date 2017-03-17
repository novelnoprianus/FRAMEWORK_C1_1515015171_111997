<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
     public function awal()
    {
    	return "Hello dari jadwalController<br>'tambah' ngga bisa nampil :'( ";
    }
     public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$ruangan = new ruangan();
	$ruangan->username = 'Novel';
	$ruangan->password = 'novel';
	$ruangan->save();
	return "data dengan username {$ruangan->username} telah disimpan";
}
}
