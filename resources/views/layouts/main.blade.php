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
    {{-- Script Dependency Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <div class="start-page">
      <header class="header">
        <div class="header-container">
            <a href="{{  route('notes.index') }}"  class="nav-link" href="">Voltar</a>
          <span class="current-page">@yield('current-page-name')</span>
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
                <a href="{{ route('notes.index') }}" class="nav-link">
                  <i class='bx bx-home nav-icon'></i>
                  <span class="nav-name">Início</span>
                </a>
                <a href="{{ route('notes.create') }}" class="nav-link ">
                  <i class='bx bx-edit nav-icon'></i>
                  <span class="nav-name">Criar Nota</span>
                </a>
              </div>
              <div class="nav-items">
                <h3 class="nav-subtitle">Notas</h3>
                <div class="nav-dropdown-collapse">
                  <a class="nav-link nav-link-collapse" href="#">
                    <i class='bx bx-note nav-icon'></i>
                    <span class="nav-name">Recentes</span>
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
                      <a href="{{ route('notes.index') }}" class="btn btn-secondary btn-sm w-100">Ver mais</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-list">
            <div class="nav-items nav-items-end">
              <div id="darkModeToggle" class="nav-dark-mode-toggle  nav-link">
                <i id="darkModeIcon" class='bx bx-sun nav-icon'></i>
                <span id="darkModeName" class="nav-name">Modo Dark</span>
              </div>
              <a href="{{ route('auth.logout') }}" class="nav-link nav-logout">
                <i class='bx bx-exit bx-rotate-180 nav-icon'></i>
                <span class="nav-name">Sair</span>
              </a>
            </div>
          </div>
        </nav>
      </div>
      <div class="container-fluid main-page">
        <div id="section-preloader" class="preloader">
          <div class="preloader-spinner"></div>
        </div>
        <div class="row">
          @yield('messages')
          @yield('content')
        </div>
      </div>
    </div>
    {{-- Script Preloader --}}
    <script src="/js/preloader.js"></script>
    {{-- Script Dark --}}
	<script src="/js/dark-mode.js"></script>
    {{-- Script CDN Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    {{-- Script SideBar --}}
	<script src="/js/sidebar.js"></script>
    @yield('ckeditor')
    @yield('sweetAlert')

  </body>
</html>
