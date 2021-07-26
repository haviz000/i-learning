@extends('layouts.appUser')

@section('content')
	<h1>Data Warehouse KJ001</h1>
	<div class="pt-5">
		 @for ($i = 1; $i <= 12; $i++)    	
		  <button class="btn btn-primary large"  type="button" data-toggle="collapse" data-target="#collapse{{ $i }}" aria-expanded="false" aria-controls="collapseExample" >
		    Perkuliahan sesi {{ $i }} <i class="fa fa-angle-down" aria-hidden="true"></i>

		  </button>
		</p>
		<div class="collapse" id="collapse{{ $i }}">
		  <div class="card card-body">
		   <a href="https://repository.nusamandiri.ac.id/index.php/unduh/item/236844/Modul-Data-warehouse.pdf">Modul Pertemuan {{ $i }}</a>
		  </div>
		</div>
	@endfor
@endsection