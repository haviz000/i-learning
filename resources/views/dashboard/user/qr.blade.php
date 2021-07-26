@extends('layouts.appUser')

@section('content')
<div class="container">
	<div class="text-center ">
    <p>Scan me to get KRS </p>
    <div class="col">
    	{!! QrCode::size(100)->generate('http://192.168.100.9:8000/user/nilai') !!}	
    </div>
    
    <br>
    <p>or</p>

    <div class="col" style="">
    	<button class="btn btn-primary"><a href="{{ route('user.nilai') }}" style="color:white;">KRS</a></button>
    </div>
</div>
</div>

@endsection