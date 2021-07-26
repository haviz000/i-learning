@extends('layouts.appAdmin')

@section('content')
	<div class="container">
		<form method="post" action="{{ route('admin.editKelas',$kelas->id) }}">
			{{ csrf_field() }}
			 <div class="form-group mb-3">
	  			<label class="label" for="name">Nama Kelas</label>
	  			<input type="text" input id="nama_kelas" class="form-control form-control @error('nama_kelas') is-invalid @enderror" placeholder="nama kelas" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required autocomplete="nama_kelas" autofocus>
	  										@error('nama_kelas')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
  			</div>
  			<div class="form-group mb-3">
	  			<label class="label" for="name">Kode Matkul</label>
	  			<input type="text" input id="kode_matkul" class="form-control form-control @error('kode_matkul') is-invalid @enderror" placeholder="kode matkul" name="kode_matkul" value="{{ $kelas->kode_matkul}}" required autocomplete="kode_matkul" autofocus>
	  										@error('kode_matkul')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
  			</div>
  			<div class="form-group mb-3">
	  			<label class="label" for="name">Kode Kelas</label>
	  			<input type="text" input id="kode_kelas" class="form-control form-control @error('kode_kelas') is-invalid @enderror" placeholder="kode kelas" name="kode_kelas" value="{{ $kelas->kode_kelas }}" required autocomplete="kode_kelas" autofocus>
	  										@error('kode_kelas')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
  			</div>
  			<div class="form-group mb-3">
	  			<label class="label" for="name">Id Dosen</label>
	  			<input type="text" input id="id_lecturer" class="form-control form-control @error('id_lecturer') is-invalid @enderror" placeholder="id lecturer" name="id_lecturer" value="{{ $kelas->id_lecturer }}" required autocomplete="id_lecturer" autofocus>
	  										@error('id_lecturer')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
  			</div>
  			<div class="form-group mb-3">
	  			<label class="label" for="name">SKS</label>
	  			<input type="text" input id="sks" class="form-control form-control @error('sks') is-invalid @enderror" placeholder="sks" name="sks" value="{{ $kelas->sks }}" required autocomplete="sks" autofocus>
	  										@error('sks')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
  			</div>

  		<div class="form-group">
        	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Ubah Data') }}</button>
        </div>
		</form>
	</div>
@endsection