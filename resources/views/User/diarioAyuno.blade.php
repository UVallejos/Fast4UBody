@extends("layouts.landing")

@section("title", "Fast4UBody")

@section("content")

<br>
    <div class="container">
        <h1 class="text-center">Diario de Ayuno</h1>
    </div>
    <br>
    <div class="container">
        <div class="row p-3 mb-5">
          <div class="col">
            <h4 class="text-center">Ayuno Actual</h4>
            <div class="card rounded shadow p-3 mb-5 bg-body rounded">
                <div class="table-responsive" >
                    <form action="{{ route('finalizar_ayuno') }}" method="post">
                      @csrf
                      @if ($ayuno->where('actualmenteAyunando', true)->count() > 0)
                        <input type="submit" class="btn btn-danger" value="Finalizar Ayuno">
                      @endif
                      
                      <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th></th>
                              <th colspan="2">Fecha y Hora Inicio</th>
                              <th></th>
                              <th colspan="2">Tiempo Ayunando</th>
                              <th></th>
                              <th colspan="2">Fecha y Hora de Comer</th>
                              <th>Tipo de Ayuno</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if ($ayuno->where('actualmenteAyunando', true))

                              @foreach($ayuno as $ayun)
                                    @php
                                        $inicio = Carbon\Carbon::parse($ayun->inicioAyuno)->format("d-m-Y H:i:s");
                                        $fin = Carbon\Carbon::parse($ayun->finAyuno);

                                        $diferenciaSegundos = Carbon\Carbon::now()->diffInSeconds($inicio);
                                        $horas = floor($diferenciaSegundos / 3600);
                                        $minutos = floor(($diferenciaSegundos % 3600) / 60);
                                        $duracion = sprintf("%02d:%02d", $horas, $minutos);

                                        $tiempoHastaComer = Carbon\Carbon::parse($ayun->finAyuno)->diffForHumans();
                                    @endphp
                                    @if($inicio <= $fin and $ayun->actualmenteAyunando)
                                        <tr>
                                            <th></th>
                                            <td colspan="2">{{ $inicio }}</td>
                                            <td></td>
                                            <td colspan="2">{{ ($duracion ) }}</td>
                                            <td></td>
                                            <td colspan="2">{{ \Carbon\Carbon::parse($ayun->finAyuno)->format("d-m-Y H:i:s")  }}</td> 
                                            <td>{{ $ayun->tipoAyuno }} Horas</td>
                                        </tr>
                                    @else
                                      <tr>
                                        <th></th>
                                        <td colspan="2"></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        <td></td>
                                        <td colspan="2"></td> 
                                        <td></td>
                                    </tr>
                                    @endif
                                @endforeach
                          
                            @else
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            @endif
                        </tbody>
                      </table>
                    </form>
                </div>
            </div>
          </div>
          <div class="col table-responsive">
            <h4 class="text-center">Medidas</h4>
            <div class="card rounded shadow p-3 mb-5 bg-body rounded">
                <div class="table-responsive">
                    <table class="table table-striped table-hover ">
                        <thead>
                          <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Altura</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Peso Objetivo</th>
                            <th scope="col">IMC</th>
                            <th>Eliminar</th>
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
                                  <td>
                                    <form action="{{ route('eliminar_registro_m') }}" method="POST" >
                                        @csrf
                                        <button name="id" type="submit" class="btn btn-danger" value="{{ $item->id }}" acc>
                                          Eliminar
                                        </button>
                                      </form>
                                  </td>
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
            <div class="col table-responsive">
                <h4 class="text-center">Historial Ayuno</h4>
                <div class="card rounded shadow p-3 mb-5 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                              <tr>
                                <th>Fecha inicio</th>
                                <th>Hora Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Hora Fin</th>
                                <th>Tiempo Ayunado</th>
                                <th>Tipo Ayuno</th>
                                <th>Eliminar</th>
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
                                  <td>
                                    <form action="{{ route('eliminar_registro') }}" method="POST" >
                                        @csrf
                                        <button name="id" type="submit" class="btn btn-danger" value="{{ $ayuno->id }}" acc>
                                          Eliminar
                                        </button>
                                      </form>
                                  </td>
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