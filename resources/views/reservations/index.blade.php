
@extends('layouts.app')
@section('content')

<div class="container">
<table class='table table-hover'>
<center>
<h1>LISTE DES RESERVATION</h1>
</center>
<div style="float:right">
 {{-- <a class="btn btn-success right" href="{{ Route('reservation.show') }}">ITINERAIRE</a> <a class="btn btn-warning right" href="{{ Route('chauffeur.create') }}">Convoyeur</a> --}}
</div>
        <thead>
       <th>ID</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>VILLE DEPART</th>
        <th>VILLE D'ARRIVER</th>
        <th>HEURE DEPART</th>
        <th>DATE DEPART</th>


        </thead>
        <tbody>
        @foreach($reservation as $res)
        <tr>
            <td> {{$res->id}}</td>
        <td> {{$res->nom}}</td>
        <td> {{$res->prenom}}</td>
        <td> {{$res->villeDepart}} </td>
        <td> {{$res->villeArrivee}}</td>
        <td> {{$res->heuredepart}} </td>
        <td>  {{$res->date}} </td>

      </tr>

        @endforeach


        </tbody>
    </table>
    </div>





@endsection
