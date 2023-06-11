<div class="card shadow p-0 bg-body rounded align-items-center" >
        <img src="{{$src}}" class="card-img-top img-fluid shadow p-3 rounded " style="width: 225px; height: auto;" alt="img con número de horas de ayuno">
        <div class="card-body p-1 s-1">
              <div class="form-check d-flex justify-content-center">
                  <input type="radio" class="btn-check " name="tipo_ayuno" id="tipoAyuno{{ $value }}" value="{{ $value }}" required>
                  <label class="btn btn-outline-success" for="tipoAyuno{{ $value }}">Seleccionar</label>
              </div>
              
        </div>
</div>