@extends("layouts.landing")
@section("title", "Herramientas")


@section('content')
    <br>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <div class="col card rounded shadow p-3 mb-5 bg-body rounded " id="IMC">
                    <section id="CalcIMC">
                        @component('_components.imcCal')
                            @slot('action', "#")
                            @slot('title', "Calular IM")
                            @slot("title_result", "Tabla IMC de la OMS")
                        @endcomponent
                    </section>
                </div>
            </div>
            <div class="col">
                <div class="col offset-1 card rounded shadow p-3 mb-5 bg-body rounded " id="caloriasD">
                    <section id="CalcAct">
                        @component('_components.activCal')
                            @slot('action', "#")
                            @slot('title', "Calular IM")
                            @slot("title_result", "Tabla IMC de la OMS")
                        @endcomponent
                    </section>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2">
            
        </div>
    </div>

@endsection



@section("scripts")
<script src="{{ asset('js/herramientas.js') }}"></script>
@endsection