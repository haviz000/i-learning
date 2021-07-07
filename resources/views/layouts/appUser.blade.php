<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/styleUser.css') }}">
  </head>
  <body>
        
        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
        </div>
                <div class="p-4 pt-5">
                <h1><a href="{{ route('user.home') }}" class="logo">I-Learning</a></h1>
            <ul class="list-unstyled components mb-5">
              <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelas</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('user.iot') }}">Internet To Thing</a>
                </li>
                <li>
                    <a href="{{ route('user.dw') }}">Data WareHouse</a>
                </li>
                <li>
                    <a href="{{ route('user.network') }}">Network</a>
                </li>
                </ul>
              </li>
              <li>
                  <a href="{{ route('user.nilai') }}">Nilai</a>
              </li>
              <li>
                <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-style: oblique;">Logout</a>
                <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
              </li>
            </ul>

            <div class="mb-5">

            </div>

          </div>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5 " align="center">
        @yield('content')
        </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>