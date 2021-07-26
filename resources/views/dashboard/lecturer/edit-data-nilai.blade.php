@extends('layouts.appLecturer')

@section('content')
	<div class="container">
		<form method="post" action="{{ route('lecturer.editNilai',$nilai->id) }}">
			{{ csrf_field() }}
			
			<div class="form-group mb-3">
  			<label class="label" for="name">Edit Nilai {{ $nilai->name }}</label>
  			<input type="text" input id="nilaiDw" class="form-control form-control @error('nilaiDw') is-invalid @enderror" placeholder="nilai Datawarehouse" name="nilaiDw" value="{{ $nilai->nilaiDw }}" required autocomplete="nilaiDw" autofocus>
  										@error('nilaiDw')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Nilai IOT</label>
  			<input type="text" input id="nilaiIot" class="form-control form-control @error('nilaiIot') is-invalid @enderror" placeholder="nilai IOT" name="nilaiIot" value="{{ $nilai->nilaiIot }}" required autocomplete="nilaiIot" autofocus>
  										@error('nilaiIot')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group mb-3">
  			<label class="label" for="name">Nilai Network</label>
  			<input type="text" input id="nilaiNetwork" class="form-control form-control @error('nilaiNetwork') is-invalid @enderror" placeholder="nilai network" name="nilaiNetwork" value="{{ $nilai->nilaiNetwork }}" required autocomplete="nilai" autofocus>
  										@error('nilaiNetwork')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
  		</div>
  		<div class="form-group">
        	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Masukan Nilai') }}</button>
        </div>
		</form>
		@include('sweetalert::alert')
	</div>
@endsection