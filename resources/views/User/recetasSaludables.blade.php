@extends("layouts.landingUser")


@section("title", "Fast4UBody")

@section("content")
<br>
<div class="container">
    @foreach ($recetas as $receta)
    <div class="row justify-content align-items g-2">
            <div class="col">
                <div class="card shadow  mb-5 bg-body rounded">
                    <img src="{{ asset($receta->imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $receta->nombreReceta }}</h3>
                        <p class="card-text">{{ $receta->procedimiento }}</p>
                        <table>
                            <tbody>
                                @php
                                    $ingredientes = explode(',', $receta->ingredientes);
                                @endphp
                                @foreach ($ingredientes as $ingrediente)
                                    <ul>
                                        <li>{{ ucfirst($ingrediente) }}</li>
                                    </ul>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach 
</div>

@endsection