@extends("layouts.landing")


@section("title", "Fast4UBody")

@section("content")
<br>
<div class="container">
    <div class="row row-cols-2">
        @for($i = 0; $i < 6; $i += 2)
        <div class="col">
            <div class="card shadow mb-5 bg-body rounded" id="card_receta">
                @component("_components.card_receta")
                    @slot("src", asset($recetas[$i]->imagen))
                    @slot("title", $recetas[$i]->nombreReceta)
                    @slot("content", $recetas[$i]->procedimiento)
                    @slot("ingredientes")
                    <table>
                        <tbody>
                            @php
                                $ingredientes = explode(',', $recetas[$i]->ingredientes);
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
            </div>
        </div>

        @if(($i+1) < count($recetas))
            <div class="col">
                <div class="card shadow mb-5 bg-body rounded" id="card_receta">
                    @component("_components.card_receta")
                        @slot("src", asset($recetas[$i+1]->imagen))
                        @slot("title", $recetas[$i+1]->nombreReceta)
                        @slot("content", $recetas[$i+1]->procedimiento)
                        @slot("ingredientes")
                        <table>
                            <tbody>
                                @php
                                    $ingredientes = explode(',', $recetas[$i+1]->ingredientes);
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
                </div>
            </div>
        @endif

        @endfor
    </div>
    <br>
</div>
<!---->




@endsection







