@extends('layouts.newlayout')

@section('content')
  <div class="container mt-3">
    <form class="row justify-content-center" action="" method="">
      @csrf
      <input class="col-10 col-md-9 col-lg-7" type="text" name="name_friend" value="" placeholder="Buscar por nombre de usuario">
      <button type="button" name="search_players" class="col-2 col-md-1"> @fas('fa-search')</button>
    </form>
    <div class="row justify-content-center">
      <ul class="friends-list col-sm-12 col-md-10 col-lg-8">
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>

        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>
        <li class="green-line-bottom">
          <img src="/images/usuario.png" alt="" class="user-picture-small">
          <ul class="add_friends_data">
            <li> <h3> Username 1</h3> </li>
            <li> <p> Ranking: 2000</p> </li>
            <li> <p> Preguntas contestadas: </p> </li>
          </ul>
          <button class="add-friend-button" type="button" name="button"> Agregar @fas('fa-user-plus') </button>
        </li>


      </ul>
    </div>
  </div>
@endsection

@section('extrascripts')
  <script>
  $(document).ready(function() {
    $('.add-friend-button').on('click', function () {
      $(this).css('background', '#00cc6d');
      $(this).css('height', 'auto');
      $(this).html("<span> Solicitud <br> enviada </span>");
    });
  });
  </script>
@endsection
