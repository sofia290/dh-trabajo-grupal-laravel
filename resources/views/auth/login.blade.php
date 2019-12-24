@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
          <h1 class="text-center "> {{ __('Inicia sesión') }} </h1>
          <p> ¿No tenes cuenta? <a href="/register"> Registrate aca </a></p>
          <form class="" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-12"for="email">{{ __('Email') }}</label>
                <div class="input-group col-12">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      @fa('fa-at')
                    </div>
                  </div>
                  <input id="email" class="form-control" name="email" placeholder="Ingrese su correo electrónico" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                  <label for="password">{{ __('Contraseña') }}</label>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('¿Olvidaste tu contraseña?') }}
                      </a>
                  @endif

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        @fa('fa-lock')
                      </div>
                    </div>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingrese su contraseña" required autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-12">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Recordame') }}
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group row">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-success">
                          {{ __('Iniciar sesión') }}
                      </button>
                  </div>
              </div>
          </form>
        </div>
    </div>
</div>
@endsection
