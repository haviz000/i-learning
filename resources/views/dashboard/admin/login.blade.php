<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
    <section class="ftco-section">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Admin Panel</h2>
                               {{--  <p>Don't have an account?</p>
                                <a href="{{ route('user.register') }}" class="btn btn-white btn-outline-white">Sign Up</a> --}}
                            </div>
                  </div>
                        <div class="login-wrap p-4 p-lg-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Log In Admin</h3>
                        </div>
                    </div>
                            <form class="signin-form" action="{{ route('admin.check') }}" method="post" autocomplete="off">
                                @if(Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                @endif
                                @csrf
                        <div class="form-group mb-3">
                            <label class="label" for="name">Email</label>
                            <input  class="form-control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required id="email" type="email"  required autocomplete="email" autofocus>
                            @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                        </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                      <input type="password" id="password" class="form-control form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary submit px-3">{{ __('Login') }}</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0" {{ old('remember') ? 'checked' : '' }}  name="remember" id="remember">Remember Me
                                      <input type="checkbox" checked>
                                      <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                                    </div>
                    </div>
                  </form>
                </div>
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

