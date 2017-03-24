@extends('master')
@section('container')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="{{ url('pengguna') }}"><i style="color: white;" class="fa text-default fa-chevron-left"></i></a> Tambah Data Pengguna </strong>
		</div>
		{!! FORM::open(['url'=>'pengguna/simpan','class'=>'form-horizontal']) !!}
		@include('pengguna.form')
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
		</div>
		{!! FORM::close() !!}
	</div>
	@stop