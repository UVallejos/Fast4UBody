@extends("layouts.landing")


@section("title", "Fast4UBody")

@section("content")
<br>


<div class="container">
    <div class="row ">
        @for($i = 1; $i <= 6; $i++)
        <div class="col-6">
            <div class="card shadow  mb-5 bg-body rounded" id="card_receta">
            @foreach ($recetas as $receta)
                @component("_components.card_receta")
                    @slot("src", asset($receta->imagen))
                    @slot("title", $receta->nombreReceta)
                    @slot("content", $receta->procedimiento)
                    @slot("ingredientes")
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
                    @endslot

                @endcomponent
            
            @endforeach  
            </div>   
        </div>
        @endfor
    </div>
    <br>
</div>

@endsection







