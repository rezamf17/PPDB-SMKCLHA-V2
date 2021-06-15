@extends('layouts.app')
@section('title')
Daftar
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="carre">
                   <h2>Form Pendaftaran</h2>
                    <form method="POST" class="box" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <div class="col-md-6">
                                <input id="name" placeholder="Nama Lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="role" type="text" placeholder="role" style="display: none;" class="form-control @error('role') is-invalid @enderror" name="role" value="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('DAFTAR') }}
                                </button>
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
            <h2>Form Pendaftaran</h2>
            <form action={{ route('register') }}" method="post" class="box" accept-charset="utf-8">
                    <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                    <input id="password" type="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <input id="password-confirm" type="password" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                    <a href="" type="submit" title="" class="">DAFTAR</a>
                </form>
        </div>
    </content> --}}
@endsection
