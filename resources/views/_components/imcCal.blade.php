<form name="imcForm" action="{{$action}}" method="POST">
                        <h1>{{$title}}</h1>
                        <div class="mb-3">
                        <input id="peso" type="number"name="peso" placeholder="Peso" pattern="[0-9]+" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <input id="altura" type="number" class="form-control" name="edad" placeholder="Altura" pattern="[0-9]+" required />
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-success btn-lg float-right" id="btnCalcularImc" onclick="calcularIMC()">Calcular</button>
                        </div>
</form>

<div id="resultadoIMC">
                  <h5></h5>
                  <div class="col">
                    <div class="" id="IMC">
                      <h3>{{$title_result}}</h3>
                        <section id="tablaIMC">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th >Por debajo de 18.5</th>
                                <th >Bajo peso</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th class="table-info">18,5&mdash;24,9</th>
                                <td class="table-info">Peso normal</td>
                              </tr>
                              <tr>
                                <th class="table-success">25.0&mdash;29.9</th>
                                <td class="table-success">Pre-obesidad o Sobrepeso</td>
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
                                <th class="table-light">Por encima de 40</th>
                                <td class="table-light">Obesidad clase III</td>
                              </tr>
                            </tbody>
                          </table>
                        </section>
                    </div>
                  </div>
              </div>