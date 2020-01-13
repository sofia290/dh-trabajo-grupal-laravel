@extends('layouts.newlayout')
@php
use App\User;
@endphp
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
    <h2> Amigos </h2> <span> <a href="/friends/add">Agregar amigos </a></span> <!-- No se ve en mobile, hacer otro -->
    <div class="container-fluid friends">
      <div class="row">
        @if ($friends)
          @foreach ($friends as $friend)
            @if ($friend["user_id2"] != Auth::user()->id)
              @php
              $friend = User::find($friend["user_id2"]);
              @endphp
              <div class="col-4 col-lg-2">
                <li> <img src="{{$friend->profile_picture}}" alt=""> <a href="#">{{$friend->username}}</a></li>
              </div>
            @elseif ($friend["user_id1"] != Auth::user()->id)
              @php
                $friend = User::find($friend["user_id1"]);
              @endphp
              <div class="col-4 col-lg-2">
                <li> <img src="{{$friend->profile_picture}}" alt=""> <a href="#">{{$friend->username}}</a></li>
              </div>
            @endif
          @endforeach
        @endif

        <div class="col-4 col-lg-2">
          <li> <img src="{{asset('storage/friend.png')}}" alt=""> <a href="#">Amigo 2</a></li>
        </div>
        <div class="col-4 col-lg-2">
          <li> <img src="{{asset('storage/friend.png')}}" alt=""> <a href="#">Amigo 3</a></li>
        </div>
        <div class="col-4 col-lg-2">
          <li> <img src="{{asset('storage/friend.png')}}" alt=""> <a href="#">Amigo 4</a></li>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="row">
  <div class="col-12 col-sm-4 col-lg-3 image-container">

</div>
<div class="col-12 col-sm-8 col-lg-9 user-data">

</div>-->
@include('accounts.modalprofile')
@endsection
