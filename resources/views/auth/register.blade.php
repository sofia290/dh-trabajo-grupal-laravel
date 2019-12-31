@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="text-center"> Registrate </h1>
      </div>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="{{ route('register') }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="first_name">{{ __('Nombre') }}*</label>
              @error('first_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-address-card')
                  </div>
                </div>
                <input id="first_name" name="first_name" placeholder="Introduzca su nombre" type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
              </div>
            </div>

            <div class="form-group">
              <label for="last_name"> {{'Apellido'}} * </label>
              @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-address-card')
                  </div>
                </div>
                <input id="last_name" name="last_name" placeholder="Introduzca su apellido" type="text" required="required" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
              </div>
            </div>

            <div class="form-group">
              <label for="email">{{'Correo electrónico'}} * </label>
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fa('fa-at')
                  </div>
                </div>
                <input id="email" name="email" placeholder="Introduzca su correo electrónico" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
              </div>
            </div>

            <div class="form-group">
              <label for="password">{{ __('Contraseña')}} *</label>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fa('fa-lock')
                  </div>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Cree una nueva contraseña">
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>

              <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Vuelva a ingresar su contraseña">
              </div>
            </div>

            <div class="form-group">
              <label for="username">Nombre de usuario *</label>
              @error('username')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-user-circle')
                  </div>
                </div>
                <input id="username" name="username" placeholder="Cree un nombre de usuario" type="text" required="required" class="form-control @error('username') is-invalid @enderror" required autocomplete="new-username">
              </div>
            </div>

            <div class="form-group">
              <label for="birth_date">Fecha de nacimiento *</label>
              @error('birth_date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @far('fa-calendar-alt')
                  </div>
                </div>
                <input placeholder="Introduzca su fecha de nacimiento" class="textbox-n form-control @error('birth_date') is-invalid @enderror" required autocomplete="new-birth_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha-de-nacimiento" name="birth_date">
              </div>
            </div>

            <div class="form-group">
              <label for="profile_picture">{{ __('Foto de perfil')}}</label>
              @error('profile_picture')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fa('fa-image')
                  </div>
                </div>
                <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" placeholder="Suba una foto de perfil">
              </div>
            </div>


            <div class="form-group row mb-0">
              <div class="col">
                <button type="submit" class="btn btn-success btn-block">
                  {{ __('Registrate') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection
