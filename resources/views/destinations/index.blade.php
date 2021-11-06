@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('naru')
<div class="row">
	<div class="col-md-12">
		<div class="main_heading">
			<h1>Destination</h1>
			@if (Route::has('login'))
			@auth
			<a href="{{ route('destinations.create') }}"><button class="btn btn-success"> Créer une destination</button></a>

			@endauth
			@endif
			<div class="text-center"><span class="underline"></span></div>
		</div>
	</div><!-- End col-md-12 -->

</div><!-- End row -->
@foreach($destination as $destinations)
<div class="col-md-4 services-box-gray col-sm-6">
	
	<div class="services-box">
		<h2>{{ $destinations->villeDepart }}</h2>
		<h2>à</h2>
		<h2>{{ $destinations->villeArrivee }}</h2>
		<h4>Départ: {{ $destinations->heuredepart}}</h4>
		<h4>Date: {{ $destinations->date }}</h4>
		
		<a href="{{ route('destinations.show',$destinations->id) }}"><button class="btn btn-primary">Show</button></a>
		<a href="{{ route('destinations.edit',$destinations->id) }}"><button class="btn btn-primary">Editer</button></a>
	</div>
</div><!-- End col-md-4-->
@endforeach
	
@endsection