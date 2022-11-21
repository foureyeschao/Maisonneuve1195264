@extends('layouts.app')
@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">@lang('lang.text_register')</h3>
                        <div class="card-body">
                            <form action="{{route('user.store')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="@lang('lang.text_name')" class="form-control" name="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                        <div class="text-danger mt-2">
                                            {{$errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="@lang('lang.text_email')" class="form-control" name="email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <div class="text-danger mt-2">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="@lang('lang.text_password')" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                        <div class="text-danger mt-2">
                                            {{$errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="btn btn-dark btn-block" type="submit">@lang('lang.text_save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
