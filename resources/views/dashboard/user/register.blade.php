<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<form method="POST" action="{{ route('user.create') }}">
			@csrf
			
			<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Register</h2>
								<p>Already have an account ?</p>
								<a href="{{ route('user.login') }}" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
			      	</div>

							<form action="#" class="signin-form">
								@if(Session::get('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
			@endif
			@if(Session::get('fail'))
				<div class="alert alert-danger">
					{{ Session::get('fail') }}
				</div>
			@endif
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" input id="name" class="form-control form-control @error('name') is-invalid @enderror" placeholder="nama" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
			      										@error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">NIM</label>
			      			<input type="text" input id="nim" class="form-control form-control @error('nim') is-invalid @enderror" placeholder="nim" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>
			      										@error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">
			      										@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
			            <div class="form-group mb-3">
			            	<label class="label" for="password">Password</label>
			              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
			              						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			            </div>
			            <div class="form-group mb-3">
			            	<label class="label" for="password">Confirm Password</label>
			              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="Re-password">
			            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3"> {{ __('Register') }}</button>
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
		</form>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

