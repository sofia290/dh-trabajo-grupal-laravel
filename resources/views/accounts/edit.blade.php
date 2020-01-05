@extends('layouts.layout')

@section('content')
  <form class="" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="contenedor">
      <div class="image-container">
        @if (Auth::user()->profile_picture)
          <img src="{{ Auth::user()->profile_picture}}" alt="" class="user-picture">
          @else
            <img src="{{ asset('images/usuario.png') }}" alt=""  class="user-picture">
        @endif
        <div id="profile_picture_change">
          <!-- Button trigger modal -->
          <a data-toggle="modal" data-target="#modalAvatar">
            Cambiar foto
          </a>
          <!--<input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" placeholder="Suba una foto de perfil">-->
        </div>
        <div class="text">
          <h2> {{ Auth::user()->username}} </h2>
          <a href=""> Cambiar foto de perfil </a>

        </div>
      </div>
      <div class="user-data">
        <h2> Editar perfil </h2>
        <div class="container mt-3" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label for="first_name" class="col-lg-3 col-form-label">Nombre</label>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-address-card')
                  </div>
                </div>
                <input id="first_name" name="first_name" type="text" class="form-control" value="{{ Auth::user()->first_name}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="last_name" class="col-lg-3 col-form-label">Apellido</label>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-address-card')
                  </div>
                </div>
                <input id="last_name" name="last_name" type="text" class="form-control" value="{{ Auth::user()->last_name}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-lg-3 col-form-label">Correo electrónico</label>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fa('fa-at')
                  </div>
                </div>
                <input id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-lg-3 col-form-label">Username</label>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @fas('fa-user-circle')
                  </div>
                </div>
                <input id="username" name="username" type="text" class="form-control" value="{{ Auth::user()->username}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="birth_date" class="col-lg-3 col-form-label">Fecha de nacimiento</label>
            <div class="col-lg-6">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    @far('fa-calendar-alt')
                  </div>
                </div>
                <input id="birth_date" name="birth_date" type="text" class="form-control" value="{{ Auth::user()->birth_date}}">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-lg-6">
              <button name="submit" type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--<div class="row">
  <div class="col-12 col-sm-4 col-lg-3 image-container">

</div>
<div class="col-12 col-sm-8 col-lg-9 user-data">

</div>-->
<!-- Modal avatar -->
<div class="modal fade" id="modalAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="" action="/accounts/edit/{{Auth::user()->id}}/saveProfilePicture" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          <input type="file" name="profile_picture" value="">
      </div>
      <div class="modal-footer">
        @csrf
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="Guardar cambios">
      </div>
    </form>
    </div>
  </div>
</div>

@endsection
