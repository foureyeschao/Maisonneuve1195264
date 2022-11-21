@extends('layouts.app')
@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if($errors)
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li class="text-danger">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form action="{{route('login.authentication')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="email" class="form-control" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="password" class="form-control" name="password">
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block" type="submit">Sign In</button>
                                </div>
                            </form>
                            <a href="">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
