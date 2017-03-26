<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa = new mahasiswa();
	$mahasiswa->username = 'Novel';
	$mahasiswa->password = 'novel';
	$mahasiswa->save();
	return "data dengan username {$mahasiswa->username} telah disimpan";
}
}
