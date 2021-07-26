@extends('layouts.appLecturer')

@section('content')
	<!doctype html>
<html lang="en">
  <head>
  	<title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Penilaian Mahasiswa</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>#</th>
						      <th>Nama</th>
						      <th>NIM</th>
						      <th>Nilai Data Warehouse</th>
						      <th>Nilai IOT</th>
						      <th>Nilai Network</th>
						      <th>Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
						  	
						  	@foreach($users as $key=>$value)
						    <tr>
						      <th scope="row">{{ $key++ +1}}</th>
						      <td>{{ $value->name }}</td>
						      <td>{{ $value->nim }}</td>
						     	<td>{{ $value->nilaiDw }}</td>
						     	<td>{{ $value->nilaiIot }}</td>
						     	<td>{{ $value->nilaiNetwork }}</td>
						     <td><a href ="{{ url('lecturer/edit-nilai',$value->id) }}"><i class="fa fa-edit"></i></a> 
										</a></td>
						    </tr>
						    @endforeach
						    
						  </tbody>
						</table>
					</div>
					<div class="card-footer">
						{{ $users->links() }}
					</div>
				</div>
			</div>
		</div>

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
@endsection
