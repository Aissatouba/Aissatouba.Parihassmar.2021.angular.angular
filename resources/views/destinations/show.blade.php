@extends('layouts.app')

@section('now')

	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>A propos</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->
	
@endsection
@section('nury')
    <div class="container">
		<div class="row">
            <div class="col-md-6">
				<img src="{{ asset('images/covoi.png') }}">
			</div><!-- End col-md-6-->
			<div class="col-md-6">
			</div><!-- End col-md-6-->
			<div class="col-md-6">
				<div class="more-features-div">
					<div class="more-features-div-icon"><i class="fa fa-car"></i></div>
					<h1 class="more-features-div-heading">{{ $destination->villeDepart }} à {{ $destination->villeArrivee }}</h1>
					<div class="more-features-div-description">
	            		<h2>le {{ $destination->date }} à {{ $destination->heuredepart }}</h2>
                        <h3>Contactez 773043797</h3>
	            	</div>
					<a href="{{ route('reservations.create') }}"><button class="btn btn-primary">Reserver une place</button></a>

				</div>
			</div><!-- End col-md-6-->
		</div><!-- End row -->
	</div><!-- ENd container -->
@endsection