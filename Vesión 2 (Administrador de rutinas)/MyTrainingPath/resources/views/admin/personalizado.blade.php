<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <title>Document</title>
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/mytrainingpath">
        Home
      </a>

      <a class="navbar-item" href="/admin">
        Rutinas Principiantes


      </div>
    </div>

  </div>
</nav>
    <div class="container">
    <p class="title is-4">Admin - Rutina Personalizado</p>
      <table class="table is-bordered">
        <thead>
          <tr>
          <th>Usuario</th>
            <th>Ejercicios</th>
            <th>Series</th>
            <th>Repeticiones</th>
            <th>Opción</th>
          </tr>
        </thead>
        @foreach($perso as $p)
            
        <tbody>
          <tr>
          <th>{{$p->User->name}}</th>
            <td>{{$p->Ejercicios}}</td>
            <td>{{$p->Series}}</td>
            <td>{{$p->Repeticiones}}</td>
            <td><form action="/admin/delete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$p->id}}">
                <button class="button" type="submit">Eliminar</button></form></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
</body>
</html>