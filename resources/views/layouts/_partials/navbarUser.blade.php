  @if(auth()->check())
  <header>
    <div class="container" id="cabecera">
      <div class="row ">
        <div class="col justify-content-center"><h1 class=" titulo text-center text-md">Fast4UBody</h1></div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" id="navBarFondo">
      <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav" id="navBarUl">
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
            </li>
            
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" href="{{ route('mostrar_diario') }}">Diario de Ayuno</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" href="{{ route('iniciar_ayuno') }}">Iniciar Ayuno</a>
            </li>
            
            <li class="nav-item dropdown" id="navBarLi">
              <a class="nav-link active" href="{{ route('mostrar_receta') }}">Recetas</a>
            </li>
            <li class="nav-item dropdown" id="navBarLi">
                    <a a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"  >
                    Recursos 
                    </a>
                    <ul class="desplegable" aria-labelledby="navbarDropdownMenuLink" id="">
                        <a class="item-desplegable" href="{{ route('sobreAyuno') }}">Sobre Ayuno</a>
                        <a class="item-desplegable" href="{{ route('sobreAyuno') }}#PreguntasFrecuentes">Preguntas y Respuestas</a>
                        <a class="item-desplegable" href="{{ route('sobreAyuno') }}#Noticias">Noticias</a>
                        <a class="item-desplegable" href="{{ route('herramientas') }}">Herramientas</a>
                    </ul>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('mi_cuenta') }}"> Mi Cuenta </a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('cerrar-sesion') }}"> Cerrar Sesión </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@else
<header>
    <div class="container" id="cabecera">
      <div class="row ">
        <div class="col justify-content-center"><h1 class=" titulo text-center text-md">Fast4UBody</h1></div>
      </div>
    </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" id="navBarFondo" >
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav" id="navBarUl">
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('iniciarSesion') }}">Iniciar Sesión</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" aria-current="page" href="{{ route('registro') }}">Crear Cuenta</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}">Sobre el Ayuno</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}#PreguntasFrecuentes">Preguntas y respuestas</a>
            </li>
            <li class="nav-item" id="navBarLi">
              <a class="nav-link active" href="{{ route('sobreAyuno') }}#Noticias">Noticias</a>
            </li>
            <li class="nav-item dropdown" id="navBarLi">
              <a class="nav-link active" href="{{ route('herramientas') }}">Herramientas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@endif