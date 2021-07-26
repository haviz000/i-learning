<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS-->
    <link rel="stylesheet" href="{{ asset('css/styleLanding.css')}}">

    <title>Landing Page</title>
  </head>
  <body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark opacity">
        <div class="container">
            <img src="{{ asset('img/frp-4398919/logo-web.png') }}" class="rounded float-left logo" alt="logo">
        <a class="navbar-brand" href="#">I-Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
          	 @if (Route::has('user.login'))
               
                    @auth
                        <a href="{{ url('/user/home') }}" class="nav-item btn btn-danger tombol">Dashboard</a>
                    @else
                        <a href="{{ route('user.login') }}" class="nav-item btn btn-danger tombol">Log in <i class="fas fa-sign-in-alt"></i></a>

                    @endauth
              
            @endif
          	{{-- <a class="nav-item btn btn-danger tombol" href="#">Login</a>
            <a class="nav-item nav-link" href="#">Register</a> --}}
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir NavBar-->
    <!--Jumbotron-->    
<div class="cb">
    <div class="jumbotron jumbotron-fluid">
         <div class="container text-center">
          <h1 class="display-4 font-weight-bold ">Welcome to <br>I-Learning Website</h1>
          <p class="lead font-weight-bold">You don't start Communities. Communities already exist. The Question to ask is how you can help them to better.</p>
        </div>
    </div>
    <!--Akhir Jumbotron-->
    
    <!--Container-->
    <div class="container">

        <!--Info Panel-->
        <div class="row-justify-content-center">
            <div class="col-12 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ asset('img/frp-4398919/worldwide.png') }}" alt="worldwide" class="float-left">
                        <h4>Student exchange system</h4>
                        <p>We offer student exchange from each of the best regional universities in Indonesia.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('img/frp-4398919/compliant (1).png') }}" alt="compliant" class="float-left">
                        <h4>Regulations</h4>
                        <p>We make the best rules to be accepted and for students and the university community.</p>
                    </div>
                    <div class="col-lg">
                        <img src="{{ asset('img/frp-4398919/email.png') }}" alt="email" class="float-left">
                        <h4>Notifications</h4>
                        <p>We provide notifications to all students in all important activities on campus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--Akhir Info Panel-->

        <!--Studyspace-->
       <!-- <div class="row studyspace">
            <div class="col-lg-6">
                <img src="img/frp-4398919/library.jpg" alt="library" class="img fluid">
            </div>
            <div class="col-lg-5">
                <h3>Your work is successfull</h3>
                <a href="" class="btn btn-secondary tombol">Gallery</a>
            </div>
        </div>
        <!--Akhir Studyspace-->

        <!--Testimonial-->

        <section class="testimonial">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>“Learning is not attained by chance, it must be sought for with ardor and attended to with diligence.”</h5>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-lg-6 justify-content-center d-flex">
                  <figure class="figure">
                    <img src="img/frp-4398919/14.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 1">
                    <figcaption class="figure-caption">
                        <h5>Moh Haviz</h5>
                        <p>College</p>
                    </figcaption>
                  </figure>
                    <figure class="figure">
                        <img src="img/frp-4398919/11.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 2">
                    <figure class="figure">
                      <img src="img/frp-4398919/15.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 3">
                    </figure>
                    <figure class="figure">
                        <img src="img/frp-4398919/13.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 4">
                      </figure>
                </div>
            </div> -->
        </section>
        <!-- Akhir Testimonial-->

        <!--footer-->

        <div class="row footer">
            <div class="col text-center">
                <p>2021 All Right Reserved by Admin.</p>
            </div>
        </div>
        <!--Akhir footer-->



    </div>
    <!--Akhir Container-->
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>