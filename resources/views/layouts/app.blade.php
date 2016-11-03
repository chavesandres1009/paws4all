<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" id="nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="{{ url('/news') }}">Noticias</a></li>
                        <li><a href="{{ url('/news_admin') }}">Noticias de Refugios</a></li>
                        <li><a href="{{ url('/animales') }}">Animales en refugios</a></li>

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingresar</a></li>
                            <!--<li><a href="{{ url('/register') }}">Registerse</a></li>-->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  Registrarse<span class="caret"></span>
                              </a>                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ url('/register') }}">Nuevo Usuario</a>
                                      <a href="{{ url('/refugio_user_add')}}">Registrar refugio</a>
                                  </li>
                                </ul>
                            </li>
                        @else
                          @if(Auth::user()->is_admin)
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  Animales <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ url('/animal_add') }}">Agregar</a>
                                      <a href="{{ url('/refugio_mascotas')}}">Ver todos</a>
                                  </li>
                                </ul>
                            </li>
                          @endif

                            <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  Refugios <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ url('/refugio_add') }}">Agregar</a>
                                      <a href="{{ url('/refugios')}}">Ver todos</a>
                                  </li>
                                </ul>
                            </li>-->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a @if(Auth::user()->is_admin) href="{{ url('/refugio_user_add')}} " @else href="{{ url('modify_user') }}" @endif >Modificar</a>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <footer class="footer">
       <div class="container">
           <p>&copy; 2016 Paws4All</p>
           <p>
             <span>| Analive Castro</span>
             <span>| Oscar Chaves</span>
             <span>| Karla Dalorzo</span>
             <span>| José Villalobos</span>
           </p>
       </div>
     </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
