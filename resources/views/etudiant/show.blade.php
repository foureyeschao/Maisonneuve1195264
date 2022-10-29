@extends('layouts.app')
@section('content')


<div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
    <div class="profile-card-img" style="background-image:url(&quot;iceland.jpg&quot;);height:150px;background-size:cover;"></div>
    <div><img class="rounded-circle" style="margin-top:-70px;" src="{{ asset('img/avatar-dhg.png') }}" height="150px">
        <h3 >{{ ucfirst( $etudiant->nom ) }}</h3>
        <p style="padding:20px;padding-bottom:0;padding-top:5px;"><strong>Adresse:</strong> {{ ucfirst( $etudiant->adresse ) }}</p>
        <p style="padding:20px;padding-bottom:0;padding-top:5px;"><strong>telepone: </strong>{{ ucfirst( $etudiant->phone ) }}</p>
        <p style="padding:20px;padding-bottom:0;padding-top:5px;"><strong>Date de naissance:</strong> {{ ucfirst( $etudiant->date_de_naissance ) }}</p>
        <p style="padding:20px;padding-bottom:0;padding-top:5px;"><strong>Ville: </strong>{{ ucfirst( $ville->nom ) }}</p>
    </div>
    <a href="{{ route('index') }}">
        <button class="btn-danger">Retour</button>
    </a>
</div>
@endsection
