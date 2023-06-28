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
    <div class="start-page">
      <header class="header">
        <div class="header-container">
          <span href="#" class="current-page">@yield('current-page-name')</span>
          <div class="header-toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
          </div>
        </div>
      </header>
      <div class="sidebar" id="navbar">
        <nav class="nav-container">
          <div>
            <div class="nav-link nav-logo">
              <img class="nav-brand" src="/assets/brand/favicon.svg">
              <span class="nav-logo-name">NoteSync</span>
            </div>
            <div class="nav-list">
              <div class="nav-items">
                <h3 class="nav-subtitle">Navegação</h3>
                <a href="#" class="nav-link active">
                  <i class='bx bx-home nav-icon'></i>
                  <span class="nav-name">Início</span>
                </a>
              </div>
              <div class="nav-items">
                <h3 class="nav-subtitle">Notas</h3>
                <a href="#" class="nav-link ">
                  <i class='bx bx-edit nav-icon'></i>
                  <span class="nav-name">Criar Nota</span>
                </a>
                <div class="nav-dropdown-collapse">
                  <a class="nav-link nav-link-collapse" href="#">
                    <i class='bx bx-note nav-icon'></i>
                    <span class="nav-name">Anotações</span>
                    <i class='bx bx-chevron-down nav-icon nav-dropdown-icon'></i>
                  </a>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <a href="">Texto 1</a>
                    </li>
                    <li class="list-group-item">
                      <a href="">Texto 2</a>
                    </li>
                    <li class="list-group-item">
                      <a href="">Texto 3</a>
                    </li>
                    <li class="list-group-item">
                      <a href="">Texto 4</a>
                    </li>
                    <li class="list-group-item">
                      <a href="">Texto 5</a>
                    </li>
                    <li class="list-group-item">
                      <a href="">Texto 6</a>
                    </li>
                    <li class="list-group-item">
                      <button class="btn btn-primary btn-sm w-100">Ver mais</button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="nav-link nav-logout">
            <i class='bx bx-log-out nav-icon'></i>
            <span class="nav-name">Sair</span>
          </a>
        </nav>
      </div>
      <div class="container-fluid main-page">
        <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
    {{-- Script SideBar --}}
    <script src="/js/sidebar.js"></script>
    {{-- Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
