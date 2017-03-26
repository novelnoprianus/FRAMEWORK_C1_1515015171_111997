<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari dosenController";
    }
    public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen = new dosen();
	$dosen->username = 'Novel';
	$dosen->password = 'novel';
	$dosen->save();
	return "data dengan username {$dosen->username} telah disimpan";
}
}
