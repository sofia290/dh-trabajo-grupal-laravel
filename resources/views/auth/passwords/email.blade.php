@extends('layouts.layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center">Recuperar cuenta</h1>
        <p class="text-center">No te procupes. Te enviaremo un mensaje para recuperar tu cuenta</p>
      </div>
    </div>
    <form action="{{ route('password.email') }}" method="POST">
      @csrf
      <div class="form-group row">
        <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

        <div class="col-md-4">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                @fa('fa-at')
              </div>
            </div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-success btn-lg btn-block" >
              {{ __('Send Password Reset Link') }}
            </button>
          </div>
        </div>
      </form>
    </div>
  @endsection
