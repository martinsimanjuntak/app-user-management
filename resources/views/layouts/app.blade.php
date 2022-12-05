<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">



    <!-- Styles -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.6/sweetalert2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">User App</a>
      @auth
      <div class="d-flex">
        @if(strpos(auth()->user()->role,"superadmin"))
        Superadmin
        @elseif (strpos(auth()->user()->role,"operasional"))
        Operasional
        @endif
        <a class="nav-link active" aria-current="page" href="/profile/{{auth()->user()->id}}">Hi , {{auth()->user()->name}} </a>
        @if(auth()->user()->image)
        <a class="navbar-brand" href="#">
          <img src="{{asset('storage/'.auth()->user()->image)}}" alt="" width="30" height="24">
        </a>
        @else
        <img src="{{asset('storage/post-images/qYOVWnCbX3Wh7UXXhwh8jiDzIwGcjafCEzWOejVG.jpg')}}" alt="" width="30" height="24">
        @endif
        <form action="/logout" method="POST">
          @csrf
          <button  type="submit" class="dropdown-list">Logout</button>
        </form>
      </div>
      @else 
      <form class="d-flex">
        <a class="nav-link active" aria-current="page" href="/login">Login</a>
        <a class="nav-link active" aria-current="page" href="/register">Register</a>
      </form>
      @endauth
      </div>
    </div>
  </nav>
      <div class="main">
            @yield('content')
      </div>
</body>
</html>
