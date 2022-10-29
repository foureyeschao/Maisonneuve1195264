@extends('layouts.app')
@section('content')

    <div class="container">
        <h2 class="text-center mt-3 mb-4">Ajoute Infos de l'étudiant</h2>
        <div class="col">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <label for="nickname">Nom de l'étudiant</label>
                <div class="inputWithIcon">
                    <input type="text" id="nom" name="nom" placeholder="votre nom et prénom">
                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <label for="birthday">Date de naissance de l'étudiant</label>
                <div class="inputWithIcon">
                    <input type="text" id="birthday" name="date_naissance" placeholder="1997-10-10">
                    <i class="fa fa-birthday-cake fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <label for="lname">Email</label>
                <div class="inputWithIcon">
                    <input type="text" id="email" name="email" placeholder="example@gmail.com">
                    <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                </div>


                <label for="phone">Numero de telephone</label>
                <div class="inputWithIcon">
                    <input type="text" id="phoneNumber" name="telephone" placeholder="+1(514)-555-8888">
                    <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <label for="phone">Adresse de l'étudiant</label>
                <div class="inputWithIcon">
                    <input type="text" id="adresse" name="adresse" placeholder="votre adresse">
                    <i class="fa fa-location-arrow fa-lg fa-fw" aria-hidden="true"></i>
                </div>

                <label for="country">Ville</label>
                <select id="country" name="ville_id">
                    <option value="" class="form-control" selected>Selectionner une ville</option>
                    @foreach($villes as $ville)
                        <option value="{{ $ville->id }}" >{{ $ville->nom }}</option>
                    @endforeach
                </select>

                <input type="submit" value="Submit">

            </form>
            <a href="{{ route('index') }}"><button class="btn-secondary btn-accent">Retour</button></a>
        </div>
    </div>




@endsection
