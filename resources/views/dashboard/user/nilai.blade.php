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
						    <tr>
						      <th scope="row">1</th>
						      <td>CCS210</td>
						      <td>Internet Of thing</td>
						      <td>KJ002</td>
						      <td>3</td>
						      <td>A</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>UNV104</td>
						      <td>Data Warehouse</td>
						      <td>KJ006</td>
						      <td>3</td>
						      <td>A-</td>
						    </tr>
						    <tr>
						    	<th scope="row">3</th>
						     <td>CTI210</td>
						      <td>Network</td>
						      <td>KJ001</td>
						      <td>3</td>
						      <td>B+</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<h3>Scan Here</h3>
			<i class="fa fa-qrcode" aria-hidden="true" style="font-size: 100px;"></i>
	</section>
@endsection