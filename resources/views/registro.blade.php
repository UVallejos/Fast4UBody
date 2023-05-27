@extends("layouts.landing")
@section("title", "Sobre el Ayuno")

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <div><br></div>
        <div class="col-10 card rounded shadow p-3 mb-5 bg-body rounded" id="registro">
            <section id="register_div">
                @component('_components.formRegistro')
                    @slot('action', route("validar_registro"))
                    @slot('title', "Registro")
                    @slot('button_sub', "Registrar Cuenta")
                @endcomponent
            </section>
        </div>
    </div>
</div>
    
@endsection