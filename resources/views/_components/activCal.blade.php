<form name="actividadForm" action="#" method="POST">
                        <h1>Calculadora de actividad</h1>
                        <div class="mt-4 mb-3">
                        <input id="edadC" type="number" class="form-control" name="edadC" placeholder="Edad" required />
                        </div>
                        <div class="mb-3">
                            <input id="alturaC" type="number" class="form-control" name="Altura" placeholder="Altura" required />
                        </div>
                        <div class="mb-3">
                          <input id="pesoC" type="number"name="Peso" placeholder="Peso" pattern="[0-9]+" class="form-control" required />
                        </div>
                        <div class="form-check">
                          <b>Género:</b><br>
                          <input class="form-check-input" type="radio" name="genero" value="hombre" required>
                          <label class="form-check-label" for="generoInp">
                            Hombre
                          </label>
                          <br>
                          <input class="form-check-input" type="radio" name="genero" value="mujer" required>
                          <label class="form-check-label" for="generoInp">
                            Mujer
                          </label>
                        </div>
                        <br>
                        <div class="form-check">
                          <label><b>Nivel de actividad física:</b></label><br>
                          <input class="form-check-input" type="radio" name="actividad" value="sedentaria" required><label>Sedentaria</label><br>
                          <input class="form-check-input" type="radio" name="actividad" value="levemente-activa" required><label>Levemente activa</label><br>
                          <input class="form-check-input" type="radio" name="actividad" value="moderadamente-activa" required><label>Moderadamente activa</label><br>
                          <input class="form-check-input" type="radio" name="actividad" value="muy-activa" required><label>Muy activa</label><br>
                          <input class="form-check-input" type="radio" name="actividad" value="extremadamente-activa" required><label>Extremadamente activa</label><br>
                        </div>
                        <br>
                        <div class="mb-3">
                            <button type="button" class="btn btn-success btn-lg float-right" id="btnCalcularCalorias" onclick="calcularCalorias()">Calcular</button>
                        </div>
</form>

<div id="resultadoCal">
                  <h5 id="mensajeCal"></h5>
                  <div class="col">
                    <div class="" id="caloriasRes">
                      <h3></h3>
                        <section id="">
                          <table class="table" id = "resultadosTC">
                            <thead>
                              <tr>
                                <th scope="col">Bajar Peso</th>
                                <th scope="col">Mantener</th>
                                <th scope="col">Subir</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td id="caloriasBajar"></td>
                                <td id="caloriasMantener"> </td>
                                <td id="caloriasSubir"></td>
                              </tr>
                            </tbody>
                          </table>
                        </section>
                    </div>
                  </div>
              </div>