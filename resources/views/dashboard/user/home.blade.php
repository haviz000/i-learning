@extends('layouts.appUser')
<div class="cb">
@section('content')

  	<h1>Selamat Datang Di I-Learning</h1>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50" src="{{ asset('img/photo1.png') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="{{ asset('img/photo2.png') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="{{ asset('img/photo3.png') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

		<section class="">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>“You don't start communities. Communities already exist. The question to ask is how you can help them do that better”</h5>
                </div>
            </div>
        </section>


        <div class="row footer">
            <div class="col text-center">
                <p>2021 All Right Reserved by Orpxnij.</p>
            </div>
        </div>
	<p>You're Logged in as {{ Auth::guard('web')->user()->name }}</p>
        <div class="">
            <div class="col text-center text-dark ">
                <p>2021 All Right Reserved by Admin.</p>
            </div>
        </div>
</div>
@endsection