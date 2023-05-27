@extends("layouts.landingUser")

@section("title", "Fast4UBody")

@section("content")

<br>
    <div class="container">
        <h1 class="text-center">Diario de Ayuno</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
          <div class="col">
            <h4 class="text-center">Ayuno Actual</h4>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('finalizar_ayuno') }}" method="post">
                      @csrf
                      @if ($ayuno->where('actualmenteAyunando', true)->count() > 0)
                        <input type="submit" class="btn btn-danger" value="Finalizar Ayuno">
                      @endif
                      
                      <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Fecha y hora Inicio</th>
                              <th scope="col">Tiempo Ayunando</th>
                              <th scope="col">Hora de Comer</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if ($ayuno->where('actualmenteAyunando', true))

                              @foreach($ayuno as $ayun)
                                    @php
                                        $inicio = Carbon\Carbon::parse($ayun->inicioAyuno);
                                        $fin = Carbon\Carbon::parse($ayun->finAyuno);

                                        $diferenciaSegundos = Carbon\Carbon::now()->diffInSeconds($inicio);
                                        $horas = floor($diferenciaSegundos / 3600);
                                        $minutos = floor(($diferenciaSegundos % 3600) / 60);
                                        $duracion = sprintf("%02d:%02d", $horas, $minutos);

                                        $tiempoHastaComer = Carbon\Carbon::parse($ayun->finAyuno)->diffForHumans();
                                    @endphp
                                    @if($ayun->actualmenteAyunando)
                                        <tr>
                                            <td>{{ $inicio }}</td>
                                            <td>{{ ($duracion ) }}</td>
                                            <td>{{ \Carbon\Carbon::parse($ayun->finAyuno)->format("H:i")  }}</td>   
                                        </tr>
                                    @endif
                                @endforeach
                          
                            @else
                            @endif
                        </tbody>
                      </table>
                    </form>
                </div>
            </div>
          </div>
          <div class="col">
            <h4 class="text-center">Medidas</h4>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Altura</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Peso Objetivo</th>
                            <th scope="col">IMC</th>
                          </tr>
                        </thead>
                        <tbody>
                              @forelse ($diarios as $item)
                                <tr>
                                  <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                  <td>{{ $item->altura }} Cm</td>
                                  <td>{{ $item->pesoInicial }} Kg</td>
                                  <td>{{ $item->pesoObjetivo }} Kg</td>
                                  <td>{{ $item->imc }}</td>
                                </tr>
                              @empty

                              @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <h4 class="text-center">Historial Ayuno</h4>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th>Fecha inicio</th>
                                <th>Hora Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Hora Fin</th>
                                <th>Tiempo Ayunado</th>
                                <th>Tipo Ayuno</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($ayunos as $ayuno)
                                    @php
                                        $inicio = Carbon\Carbon::parse($ayuno->created_at->format('h:i'));
                                        $fin = Carbon\Carbon::parse($ayuno->updated_at->format('h:i'));

                                        $diferenciaSegundos = $fin->diffInSeconds($inicio);
                                        $horas = floor($diferenciaSegundos / 3600);
                                        $minutos = floor(($diferenciaSegundos % 3600) / 60);
                                        $duracion = sprintf("%02d:%02d", $horas, $minutos);

                                        //$tiempoHastaComer = Carbon\Carbon::parse($ayuno->finAyuno)->diffForHumans();
                                    @endphp
                                <tr>
                                  <td>{{ $ayuno->created_at->format('d/m/Y') }}</td>
                                  <td>{{ $ayuno->created_at->format('h:i a') }}</td>
                                  <td>{{ $ayuno->updated_at->format('d/m/Y') }}</td>
                                  <td>{{ $ayuno->updated_at->format('h:i a') }}</td>
                                  <td>{{ $duracion }}</td>
                                  <td>{{ $ayuno->tipoAyuno }} Hrs</td>
                                </tr>
                              @empty
                                <p>Sin datos</p>
                              @endforelse
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection