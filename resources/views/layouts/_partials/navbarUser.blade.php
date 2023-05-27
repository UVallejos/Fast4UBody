  @if(auth()->check())
  <header>
    <div class="container" id="cabecera">
      <div class="row ">
        <div class="col-md-auto"><img src="{{ asset('assets/img/logotipo.png') }}" alt="logo de página" height="60" class="d-inline-block align-text-top"></div>
        <div class="col justify-content-center"><h1 class="display-4 text-center">Fast4UBody</h1></div>
        <div class="col-md-auto"><img src="{{ asset('assets/img/logotipo.png') }}" alt="logo de página" height="60" class="d-inline-block align-text-top"></div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}"> Inicio </a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="{{ route('index') }}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Recursos 
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('sobreAyuno') }}">Sobre ayuno</a></li>
                        <li><a class="dropdown-item" href="{{ route('sobreAyuno') }}#sec1">Preguntas y Respuestas</a></li>
                        <li><a class="dropdown-item" href="{{ route('sobreAyuno') }}#sec2">Noticias</a></li>
                        <li><a class="dropdown-item" href="{{ route('herramientas') }}">Herramientas</a></li>
                    </ul>
                    </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('mostrar_diario') }}"> Mi Diario de Ayuno </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('iniciar_ayuno') }}"> Iniciar Ayuno </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active" href="{{ route('mostrar_receta') }}">  Recetas saludables </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('mi_cuenta') }}"> Mi Cuenta </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('cerrar-sesion') }}"> Cerrar Sesión </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@else
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <img src="{{ asset('assets/img/logotipo.png') }}" alt="" width="60" height="60" class="d-inline-block align-text-top">
        <h1 class="display-6">Fast4UBody</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}">| Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('iniciarSesion') }}">| Iniciar Sesión </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('registro') }}">| Crea una Cuenta </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}">| Sobre el Ayuno </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}#sec1">| Preguntas y respuestas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}#sec2">| Noticias </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active" href="{{ route('herramientas') }}"> | Herramientas </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@endif