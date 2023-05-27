@extends("layouts.landing")

@section("title", "Iniciar Sesión")

@section('content')



<div class="container">
    <div class="row">
        <div><br></div>
        <div class="col-8 offset-2 card rounded shadow p-3 mb-5 bg-body rounded " id="iniciar_sesion">
            <section id="login_div">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @component('_components.formLogin')
                    @slot('action', route("iniciar_sesion"))
                    @slot('title', "Iniciar Sesión")
                    @slot('button_sub', "Ingresar")
                @endcomponent
            </section>
        </div>
        <div><br></div>
    </div>
</div>
    
@endsection