@extends('layouts.appAdmin')

@section('content')
<div class="container">
	<form method="post" action="{{ route('admin.editMahasiswa',$mhs->id) }}">
		{{ csrf_field() }}
		<div class="form-group mb-3">
  			<label class="label" for="name">Nama</label>
  			<input type="text" input id="name" class="form-control form-control @error('name') is-invalid @enderror" placeholder="nim" name="name" value="{{ $mhs->name }}" required autocomplete="name" autofocus>
  										@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">NIM</label>
  			<input type="text" input id="nim" class="form-control form-control @error('nim') is-invalid @enderror" placeholder="nim" name="nim" value="{{ $mhs->nim }}" required autocomplete="nim" autofocus>
  										@error('nim')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Jurusan</label>
  			<input type="text" input id="jurusan" class="form-control form-control @error('jurusan') is-invalid @enderror" placeholder="jurusan" name="jurusan" value="{{  $mhs->jurusan }}" required autocomplete="jurusan" autofocus>
  										@error('jurusan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Tanggal Lahir</label>
  			<input type="date" input id="tglhr" class="form-control form-control @error('tglhr') is-invalid @enderror" placeholder="tglhr" name="tglhr" value="{{  $mhs->tglhr }}" required autocomplete="tglhr" autofocus>
  										@error('tglhr')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $mhs->email }}" required autocomplete="email" placeholder="email">
			      										@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
			            {{-- <div class="form-group mb-3">
			            	<label class="label" for="password">Password</label>
			              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
			              						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			            </div> --}}
			            {{-- <div class="form-group mb-3">
			            	<label class="label" for="password">Confirm Password</label>
			              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Re-password">
			            </div> --}}
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Ubah Data') }}</button>

		            </div>
		            <div class="form-group d-md-flex">
		            </div>
	</form>
</div>
@include('sweetalert::alert')

@endsection