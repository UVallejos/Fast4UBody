@extends("layouts.landing")


@section("title", "Fast4UBody")


@section("content")
<br>
<div class="container-fluid">
        <div class="row justify-content-center align-items-center g-2">
                
            <div class="col-8 card rounded shadow p-3 mb-5 bg-body rounded" id="miCuenta">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <!--Formulario de Registro de Cuenta-->
                <section id="register_div">
                    <form action="{{ route('mi_cuenta_e') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h1>Mi cuenta</h1>
                        <div class="mt-4 mb-3">
                            <label for="username">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly/>
                        </div>
                        <div class="mb-3">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email"name="email" value="{{ $user->email }}" readonly />
                        </div>
                        <div class="mb-3">
                            <label for="altura">Altura en Cm</label>
                            <input type="number" class="form-control" id="altura" name="altura" value="{{ $user->altura }}" readonly/>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="peso_actual">Peso Actual Kg</label>
                                <input type="number" class="form-control" id="peso" name="peso" value="{{ $user->peso }}" readonly/>
                            </div>
                            <div class="col">
                                <label for="peso_objetivo">Peso objetivo Kg</label>
                                <input type="number" class="form-control" id="pesoObjetivo" name="pesoObjetivo" value="{{ $user->pesoObjetivo }}" readonly/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-link" id="edit-btn" onclick="enableFields()">Editar</button>
                            <input type="submit" class="" id="save-btn" value="Guardar" disabled>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </div>
@endsection

@section("scripts")
<script src="{{ asset('js/miCuenta.js') }}"></script>
@endsection