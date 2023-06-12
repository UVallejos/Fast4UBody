@extends("layouts.landing")

@section("title", "Fast4UBody")

@section("content")

<br>
    <div class="container">
        <h1 class="text-center">Diario de Ayuno</h1>
    </div>
    <br>
    <div class="container">
        <!--Ayuno Actual--> 
        <div class="row justify-content-center align-items-center g-2">
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
                              @endif
                          </tbody>
                        </table>
                      </form>
                  </div>
                </div>
            </div>
        </div>
        <br>
        <!--Tabla IMC--> 
        <div class="row justify-content-center align-items-center g-2">
          <div class="col">
                    <div class="card rounded shadow p-3 bg-body rounded" id="IMC">
                      <h4 class="text-center">Tabla de IMC</h4>
                      <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr class="table-light">
                                <th >Bajo peso</th>
                                <th class="table-success">Peso normal</th>
                                <th class="table-info">Pre-obesidad o Sobrepeso</th>
                                <th class="table-warning">Obesidad clase I</th>
                                <th class="table-danger">Obesidad clase II</th>
                                <th class="table-dark">Obesidad clase III</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                               <td>Por debajo de 18.5</td>
                               <td>18,5&mdash;24,9</td>
                               <td>25.0&mdash;29.9</td>
                               <td>30.0&mdash;34.9</td>
                               <td>35,0&mdash;39,9</td>
                               <td>Por encima de 40</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                     </div>
            </div>
        </div>
        <br>
        <!--Historial Medidas--> 
        <div class="row justify-content-center align-items-center g-2 ">
          <div class="col">
            <div class="card rounded shadow p-3 bg-body rounded">
            <h4 class="text-center">Historial Medidas</h4>
                       <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                       @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                      @endif
                          <button class="m-2 btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Actualizar Medidas
                          </button>
                          
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form action="{{ route('modificar_peso') }}" method="POST" class="px-4 py-3">
                              @csrf
                              @method('PUT')
                              <div class="mb-3">
                                <label for="altura">Puedes actualizar otros datos en <b><a href="{{ route('mi_cuenta') }}"> Mi Cuenta </a></b></label>
                              </div>
                              <div class="mb-3">
                                <input type="text" class="form-control" name="peso" id="peso" placeholder="Nuevo Peso Kg" pattern="[1-9][0-9]*(\.[0-9]+)?" required />
                              </div>
                              <div class="mb-3">
                                <input type="text" class="form-control" name="pesoObjetivo" id="peso" placeholder="Nuevo Peso Objetivo Kg" pattern="[1-9][0-9]*(\.[0-9]+)?" />
                              </div>
                              <div class="mb-3">
                              </div>
                              <button type="submit" class="btn btn-primary">Actualizar</button>
                            </form>
                          </div>
                        </div>
                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-bordered ">
                        <thead>
                          <tr>
                            <th scope="col" cal>Fecha</th>
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
                                  <td class=" align-middle
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
                                    <form action="{{ route('eliminar_registro_medidas') }}" method="POST" >
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
        <!--Historial Ayuno--> 
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                
                <div class="card rounded shadow p-3 bg-body rounded">
                <h4 class="text-center">Historial Ayuno</h4>
                    <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
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
                                    @endphp
                                <tr>
                                  <td>{{  Carbon\Carbon::parse($ayuno->inicioAyuno)->format('d/m/Y') }}
                                      <br>{{  Carbon\Carbon::parse($ayuno->inicioAyuno)->format('h:i a') }}
                                  </td>
                                  <td>{{  Carbon\Carbon::parse($ayuno->finAyuno)->format('d/m/Y') }}
                                      <br>{{  Carbon\Carbon::parse($ayuno->finAyuno)->format('h:i a') }}
                                  </td>
                                  <td>{{ $duracion }} H:m</td>
                                  <td>{{ $ayuno->tipoAyuno }}:00 H:m</td>
                                  <td>
                                    <form action="{{ route('eliminar_registro_ayuno') }}" method="POST" >
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