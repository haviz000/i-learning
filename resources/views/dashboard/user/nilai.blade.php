@extends('layouts.appUser')

@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Nilai</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="{{ route('user.printpdf') }}" target="_blank" class="btn btn-success p-2 mb-3">Generate PDF <i class="fa fa-download" aria-hidden="true"></i>
</a>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>#</th>
						      <th>Kode</th>
						      <th>Nama Mata Kuliah</th>
						      <th>Kelas</th>
						      <th>SKS</th>
						      <th>Nilai</th>
						    </tr>
						  </thead>
						  <tbody>
						  @foreach($nilai as $value)
						    <tr>
						      <th scope="row">1</th>
						      <td>CCSU210</td>
						      <td>internet of thing</td>
						      <td> 	KJ002</td>
						      <td>3</td>
						      <td>{{ $value->nilaiIot}}</td>
						     </tr>
						     <tr>
						      <th scope="row">2</th>
						      <td>GGH889</td>
						      <td>Data Warehouse</td>
						      <td>KJ001</td>
						      <td>3</td>
						      <td>{{ $value->nilaiDw}}</td>
						      </tr>
						      <tr>
						      <th scope="row">3</th>
						      <td>CFD456</td>
						      <td>Network</td>
						      <td>KJ001</td>
						      <td>3</td>
						      <td>{{ $value->nilaiNetwork}}</td>
						      </tr>
						      @endforeach
						      
							  
						   
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
			{{-- <i class="fa fa-qrcode" aria-hidden="true" style="font-size: 100px;"></i> --}}
	</section>
@endsection