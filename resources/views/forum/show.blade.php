@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{ route('forum.index')}}" class="btn btn-outline-primary btn-sm">Retourner</a>
                <h4 class="display-one mt-5">
                    {{ $forumArticle->title }}
                </h4>
                <hr>
                <p>{!! $forumArticle->body !!}</p>
                <hr>
                <p>Author: {{ $forumArticle->ArticleHasUser->name }}</p>
                <p>create at: {{ $forumArticle->created_at}}</p>
            </div>
        </div>
        @if(Auth::user()->name === $forumArticle->ArticleHasUser->name)
        <div class="row">
            <div class="col-4">
                <a href="" class="btn btn-primary">Mettre a jour</a>
            </div>
            <div class="col-4">
                <a href="" class="btn btn-warning">PDF</a>
            </div>
            <div class="col-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Effacer
                </button>
                <!-- <form action="" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger" value="Effacer">
            </form> -->

            </div>
        </div>
        @endif
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('article.destroy', $forumArticle->id )}}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header bg-danger text-white">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous certain de vouloir effecer l'article: <p>{{ $forumArticle->title }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-danger">Effacer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
