@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <h1 class="display-one">Student Forum</h1>
                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <a href="{{route('article.create')}}" class="btn btn-primary">Ajouter</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des articles</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @forelse($articles as $article)
                                <li><a href="{{route('article.show', $article->id)}}">{{ $article->title }}</a></li>
                            @empty
                                <p class="text-danger">Aucun article disponible</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
