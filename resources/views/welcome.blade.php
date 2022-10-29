@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>
                    Ce blog génial contient de nombreux articles, cliquez sur le bouton ci-dessous</p> <br>
                <a href="{{ route('index') }}" class="btn btn-outline-danger">La liste de l'étudiants</a>
            </div>
        </div>
    </div>
@endsection
