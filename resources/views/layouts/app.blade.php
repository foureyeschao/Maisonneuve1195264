<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('css/Ludens---1-Dark-mode-Index-Table-with-Search-Filters.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Profile-Card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Easy-Contact-Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-form-simple.css') }}">
    <!-- CND mdbootstrap -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
          rel="stylesheet">
    <style> body { font-family: 'Nunito';} </style>
    <title>{{ config('app.name') }}</title>

</head>

<body>
@php $locale = session()->get('locale'); @endphp
<nav class="navbar navbar-expand-lg bg-light mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">@lang('lang.text_hello') @if(Auth::check()) {{ Auth::user()->name }} @else Guest @endif</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @guest
                    <a class="nav-link" href="{{route('user.registration')}}">@lang('lang.text_register')</a>
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                @else
                    <a class="nav-link" href="{{route('student.index')}}">@lang('lang.text_students')</a>
                    <a class="nav-link" href="{{route('forum.index')}}">Forum</a>
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                @endguest
                <!-- https://mdbootstrap.com/docs/standard/content-styles/flags/ -->
                <a class="nav-link @if($locale == 'en') bg-secondary @endif" href="{{route('lang', 'en')}}">En <i class="flag flag-united-states"></i></a>
                <a class="nav-link @if($locale == 'fr') bg-secondary @endif" href="{{route('lang', 'fr')}}">Fr <i class="flag flag-france"></i></a>
            </div>
        </div>
    </div>
</nav>
@yield('content')

</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>
