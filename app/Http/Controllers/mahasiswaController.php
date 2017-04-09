<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
use App\pengguna;

class mahasiswaController extends Controller
{
	protected $informasi = 'Gagal melakukan aksi';
    public function awal() 
    {
    	return view('mahasiswa.awal',['semuamahasiswa'=>mahasiswa::all()]);
    }
    public function tambah() 
    {
    	return view('mahasiswa.tambah');
    }

    public function simpan(Request $input) 
    {
    	$mahasiswa = new mahasiswa();
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->save();
        $informasi=$pengguna->save() ? 'Berhasil simpan data' : 'Gagal Simpan data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }

    public function edit($id) {
    	$mahasiswa = mahasiswa::find($id);
    	return view('mahasiswa.edit')->with(array('mahasiswa' => $mahasiswa));
    }

    public function lihat($id) {
    	$mahasiswa = mahasiswa::find($id);
    	return view('mahasiswa.lihat')->with(array('mahasiswa' =>  $mahasiswa));
    }

    public function update($id, Request $input) {
    	$mahasiswa = mahasiswa::find($id);
    	$mahasiswa->nama = $input->nama;
    	$mahasiswa->nim = $input->nim;
    	$mahasiswa->alamat = $input->alamat;
    	if ($mahasiswa->save()) {
    		$pengguna = new pengguna($input->only('username'));
    		if (!is_null($input->password)) $pengguna->password = $input->password;
    		if ($mahasiswa->pengguna()->save($pengguna)) $this->informasi= 'Berhasil simpan data';
    	}

    	return redirect('mahasiswa/awal')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id) {
    	$mahasiswa = mahasiswa::find($id);
    	if ($mahasiswa->pengguna()->delete()) {
    		if ($mahasiswa->delete()) $this->informasi = 'Berhasil hapus data';
    	}
    	return redirect('mahasiswa/awal')->with(['informasi' => $informasi]);
    }
}
