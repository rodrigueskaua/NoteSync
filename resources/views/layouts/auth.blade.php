<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Header Icon --}}
    <link rel="icon" href="/assets/brand/round-favicon.svg">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- CSS Main--}}
    <link rel="stylesheet" href="/css/main.css">
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Box Icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

    <div class="container-fluid main-login">
      <div class="row min-vh-100">
        <div class="col-lg-12 d-flex justify-content-center align-items-center">
          <div class="card-login-register @yield('card-class')">
            <div class="brand mb-4 d-flex justify-content-center align-items-center">
              <img src="/assets/brand/favicon.svg">
              <h3>NoteSync</h3>
            </div>

            <form action="@yield('form-action')" method="post" class="form">
              @yield('content')

            </form>
            <div class="@yield('sign-class') text-center">
              <p>@yield('sign-question-text')</p>
              <a href="@yield('sign-link')">@yield('sign-link-text')</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    {{-- Script CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
