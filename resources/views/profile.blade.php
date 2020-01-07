@extends('layouts.newlayout')

@section('content')
  <div class="contenedor">
    <div class="image-container">
      @if (Auth::user()->profile_picture)
        <img src="{{ Auth::user()->profile_picture}}" alt="" class="user-picture">
        @else
          <img src="{{ asset('images/usuario.png') }}" alt=""  class="user-picture">
      @endif
      <div class="text">
        <h2> {{ Auth::user()->username}}</h2>
        <a data-toggle="modal" data-target="#modalAvatar"> Cambiar foto de perfil </a>
      </div>
    </div>
    <div class="user-data">
      <h2> {{ Auth::user()->username}} </h2> <span> <a href="accounts/edit/{{Auth::user()->id}}"> Editar perfil </a></span>
      <ul>
      <li><p> Nombre: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p></li>
      <li><p> Nombre de usuario: {{ Auth::user()->username }}</p></li>
      <li><p> Correo electronico: {{ Auth::user()->email }}</p></li>
      <li><p> Fecha de nacimiento: {{Auth::user()->birth_date}}</p></li>
      </ul>
    </div>
  </div>
  <div class="user-data">
    <h2> Amigos </h2>
    <ul class="friends">
      <li> <img src="{{asset('storage/friend.png')}}" alt=""> Amigo 1</li>
      <li> <img src="{{asset('storage/friend.png')}}" alt=""> Amigo 2</li>
      <li> <img src="{{asset('storage/friend.png')}}" alt="">  Amigo 3</li>
      <li> <img src="{{asset('storage/friend.png')}}" alt=""> Amigo 4 </li>
    </ul>
  </div>
  <!--<div class="row">
  <div class="col-12 col-sm-4 col-lg-3 image-container">

</div>
<div class="col-12 col-sm-8 col-lg-9 user-data">

</div>-->
@include('accounts.modalprofile')
@endsection
