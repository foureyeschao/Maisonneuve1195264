@extends('layouts.app')
@section('content')

    <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
        <div class="container">
            <form id="contactForm" style="padding:15px;" action="" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-md-6" style="padding-left:20px;padding-right:20px;">
                        <fieldset></fieldset>
                        <legend><i class="fa fa-info mx-3"></i>Profil de l'étudiant</legend>
                        <p></p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td><i class="fa fa-user"></i></td>
                                    <td>{{ ucfirst( $etudiant->nom) }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-birthday-cake"></i></td>
                                    <td>{{ ucfirst( $etudiant->date_de_naissance) }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-home"></i></td>
                                    <td>{{ ucfirst( $etudiant->adresse) }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-map-marker"></i></td>
                                    <td>{{ ucfirst( $ville->nom) }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone"></i></td>
                                    <td>{{ ucfirst( $etudiant->phone) }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope"></i></td>
                                    <td>{{ ucfirst( $etudiant->email) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <fieldset>
                            <legend><i class="fa fa-edit"></i>&nbsp;Modification de profil</legend>
                        </fieldset>
                        <div class="form-group has-feedback">
                            <label for="from_name">Nom de l'étudiant</label>
                            <input
                                class="form-control" type="text" id="from_name" tabindex="-1" name="from_name"
                                required="" placeholder="Votre nom et prénom">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="from_birthday">Date de naissance</label>
                            <input
                                class="form-control" type="text" id="from_birthday" tabindex="-1" name="from_birthday"
                                required="" placeholder="1988-09-09">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="from_name">Adresse de l'étudiant</label>
                            <input
                                class="form-control" type="text" id="from_adresse" tabindex="-1" name="from_adresse"
                                required="" placeholder="8888,avenue pie-ix">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="ville">Ville</label>
                            <select
                                class="form-control"
                                style="height:40px"
                                id="ville"
                                name="from_ville"
                                required="">
                                <option value="" class="form-control" selected>Selectionner une ville</option>
                                @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}" >{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group has-feedback"><label for="from_phone">Telephone</label><input
                                class="form-control" type="text" id="from_phone" name="from_phone" required=""
                                placeholder="+1(514)-777-8888">
                        </div>

                        <div class="form-group has-feedback"><label for="from_email">Email</label><input
                                class="form-control" type="email" id="from_email" name="from_email" required=""
                                placeholder="example@gmail.com">
                        </div>

                        <div class="form-group mt-4">
                            <button class="btn btn-primary btn-block active" style="background-color:#303641;"
                                    type="submit">Modifier<i class="fa fa-chevron-circle-right mx-2"></i></button>

                        </div>
                        <hr>
                    </div>
                </div>
            </form>
            <a href="{{route('index')}}" class="mx-5">
                <button class="btn btn-primary btn-block active" style="background-color:#303641;">Retour<i class="fa fa-chevron-circle-right mx-2"></i></button>
            </a>
        </div>
    </section>

@endsection
