@extends("layouts.landing")

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
            <div class="card rounded shadow p-3 bg-body rounded">
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
                                    @if($ayun->actualmenteAyunando)
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
          <div class="col">
            <h4 class="text-center">Medidas</h4>
            <div class="card rounded shadow p-3 bg-body rounded">
                <div class="table-responsive">
                    <table class="table table-bordered ">
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
                                  <td class="
                                        @if ($item->imc < 18.5)
                                            table-light
                                        @elseif ($item->imc >= 18.5 && $item->imc <= 24.9)
                                            table-success
                                        @elseif ($item->imc >= 25.0 && $item->imc <= 29.9)
                                            table-info
                                        @elseif ($item->imc >= 30.0 && $item->imc <= 34.9)
                                            table-warning
                                        @elseif ($item->imc >= 35.0 && $item->imc <= 39.9)
                                            table-danger
                                        @elseif ($item->imc > 40)
                                            table-dark
                                        @endif
                                        ">
                                        {{ $item->imc }}
                                  </td>
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
            <div class="col-6">
                <h4 class="text-center">Historial Ayuno</h4>
                <div class="card rounded shadow p-3 bg-body rounded">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                              <tr>
                                <th>Fecha inicio</th>
                                <th>Fecha Fin</th>
                                <th>Tiempo Ayunado</th>
                                <th>Tipo Ayuno</th>
                                <th>Eliminar</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($ayunos as $ayuno)
                                    @php
                                       $inicio = Carbon\Carbon::parse($ayuno->inicioAyuno);
                                       $fin = Carbon\Carbon::parse($ayuno->finAyuno);
                                       $diferenciaSegundos = $fin->diffInSeconds($inicio);
                                       $horas = floor($diferenciaSegundos / 3600);
                                       $minutos = floor(($diferenciaSegundos % 3600) / 60);
                                       $duracion = sprintf("%02d:%02d", $horas, $minutos);
                                        

                                        //$tiempoHastaComer = Carbon\Carbon::parse($ayuno->finAyuno)->diffForHumans();
                                    @endphp
                                <tr>
                                  <td>{{  Carbon\Carbon::parse($ayuno->inicioAyuno)->format('d/m/Y') }}
                                      <br>{{  Carbon\Carbon::parse($ayuno->inicioAyuno)->format('h:i a') }}
                                  </td>
                                  <td>{{  Carbon\Carbon::parse($ayuno->finAyuno)->format('d/m/Y') }}
                                      <br>{{  Carbon\Carbon::parse($ayuno->finAyuno)->format('h:i a') }}
                                  </td>
                                  <td>{{ $duracion }}</td>
                                  <td>{{ $ayuno->tipoAyuno }}:00 Hrs</td>
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
            <div class="col-6">
                    <h4 class="text-center">Tabla IMC de la OMS</h4>
                    <div class="card rounded shadow p-3 bg-body rounded" id="IMC">
                        <section id="tablaIMC">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="table-light">
                                <th >Por debajo de 18.5</th>
                                <th >Bajo peso</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th class="table-success">18,5&mdash;24,9</th>
                                <td class="table-success">Peso normal</td>
                              </tr>
                              <tr>
                                <th class="table-info">25.0&mdash;29.9</th>
                                <td class="table-info">Pre-obesidad o Sobrepeso</td>
                              </tr>
                              <tr>
                                <th class="table-warning">30.0&mdash;34.9</th>
                                <td class="table-warning">Obesidad clase I</td>
                              </tr>
                              <tr>
                                <th class="table-danger">35,0&mdash;39,9</th>
                                <td class="table-danger">Obesidad clase II</td>
                              </tr>
                              <tr>
                                <th class="table-dark">Por encima de 40</th>
                                <td class="table-dark">Obesidad clase III</td>
                              </tr>
                            </tbody>
                          </table>
                        </section>
                    </div>
            </div>
        </div>
    </div>
    <br>

@endsection