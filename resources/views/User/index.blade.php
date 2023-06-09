@extends("layouts.landing")


@section("title", "Fast4UBody")

@section("content")
<br>
<!--Img Index-->
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
      <div class="col-8">
        <img src="{{ asset('assets/img/fondo.jpg') }}" class="img-fluid shadow-lg rounded" alt="Bienvenido">
      </div>
    </div>
    <div class="row justify-content-center align-items-center g-2" id="tituloIndex">
      <!--Nombre del usuario con sesión iniciada-->
      <h1 class=" text-center">Bienvenidos {{ User::get("name") }}</h1>
    </div>
  </div>
   <!--Cards Index-->
  <div class="container-sm">
    <div class="row">
      <div class="col">
        @component('_components.card_index')
            @slot('src', asset('assets/img/imc.jpg'))
            @slot("title", "Descubre tu indice de masa corporal (IMC)")
            @slot("route", route("herramientas"))
            @slot("content", "Puedes utilizar nuestra herramienta gratuita haciendo clic aquí")
        @endcomponent
      </div>
      <div class="col">
        @component('_components.card_index')
            @slot('src', asset('assets/img/opciones_romper_ayuno.jpg'))
            @slot("title", "Descubre los mejores alimentos para romper un periodo de Ayuno")
            @slot("route", route("sobreAyuno") . "#06")
            @slot("content", "Puedes utilizar leer sobre estos alimentos haciendo clic aquí")
        @endcomponent
      </div>
      <div class="col">
        @component('_components.card_index')
            @slot('src', asset('assets/img/tipos_de_ayuno.jpg'))
            @slot("title", "Descubre algunos de los diferentes tipo de Ayuno Intermitente")
            @slot("route", route("sobreAyuno"),"#05")
            @slot("content", "Descubrelos aquí")
        @endcomponent
      </div>
    </div>
  </div>

@endsection