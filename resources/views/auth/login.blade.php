@extends('layouts.app')
@section('title')
Login
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <script>
                            alert('{{$error}}');
                        </script>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="carre2">
                    <h2>Form Login</h2>
                    <form method="POST" class="box" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                      {{--   <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">    
                               <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>


                               {{--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <content>
        <div class="carre">
            <h2>Form Login</h2>
            <form action="{{ route('login') }}" method="get" class="box" accept-charset="utf-8">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <a href="" type="submit" title="" class="">LOGIN</a>
                </form>
        </div>
    </content> --}}
    @endsection
