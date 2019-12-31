@extends('layouts.layout')

@section('content')
  <div class="contenedor">
    <div class="image-container">
      <img src="{{ Auth::user()->profile_picture}}" alt="" class="user-picture">
      <div class="text">
        <h2> {{ Auth::user()->username}}</h2>
        <p> Cambiar foto de perfil </p>
      </div>
    </div>
    <div class="user-data">
      <form>
        <div class="form-group row">
          <label for="first_name" class="col-4 col-form-label">Nombre</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div>
              <input id="first_name" name="first_name" type="text" class="form-control" value="{{ Auth::user()->first_name}}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="last_name" class="col-4 col-form-label">Apellido</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div>
              <input id="last_name" name="last_name" type="text" class="form-control" value="{{ Auth::user()->last_name}}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Correo electrónico</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-500px"></i>
                </div>
              </div>
              <input id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email}}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="username" class="col-4 col-form-label">Username</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-user-circle-o"></i>
                </div>
              </div>
              <input id="username" name="username" type="text" class="form-control" value="{{ Auth::user()->username}}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="birth_date" class="col-4 col-form-label">Fecha de nacimiento</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
              <input id="birth_date" name="birth_date" type="text" class="form-control" value="{{ Auth::user()->birth_date}}">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Guardar cambios</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--<div class="row">
  <div class="col-12 col-sm-4 col-lg-3 image-container">

</div>
<div class="col-12 col-sm-8 col-lg-9 user-data">

</div>-->
@endsection
