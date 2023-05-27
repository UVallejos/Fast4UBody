@extends("layouts.landingUser")


@section("title", "Fast4UBody")

@section("content")

<br>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col card rounded shadow p-3 mb-5 bg-body rounded form-group">
            @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </ul>
              </div>
            @endif
          <form method="post" action="{{ route('guardar_ayuno') }}" >
            @csrf
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <h4 class="text-center">Selecciona el tipo de Ayuno que quieres hacer</h4>
                  </tr>
                </thead>
                <tbody>
                    <tr class="">
                      <td>
                        <label class="form-check-label" for="tipoAyuno1">
                           <input type="radio" class="form-check-input" name="tipo_ayuno" id="tipoAyuno1" value="12:12" required> 12:12
                        </label>
                      </td>
                      <td>
                        <label class="form-check-label" for="tipoAyuno2">
                          <input type="radio" class="form-check-input" name="tipo_ayuno" id="tipoAyuno2" value="16:08" required> 16:08
                        </label>
                      </td>
                      <td >
                        <label class="form-check-label" for="tipoAyuno3">
                          <input type="radio" class="form-check-input" name="tipo_ayuno" id="tipoAyuno3" value="18:06" required> 18:06
                        </label>
                      </td>
                      <td>
                        <label class="form-check-label" for="tipoAyuno4">
                          <input type="radio" class="form-check-input" name="tipo_ayuno" id="tipoAyuno4" value="20:04" required> 20:04
                        </label>
                      </td>
                      <td>
                        <label class="form-check-label" for="tipoAyuno5">
                          <input type="radio" class="form-check-input" name="tipo_ayuno" id="tipoAyuno5" value="24:00" required> 24:00
                        </label>
                      </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="form-group row mb-0">
              <div class="">
                <h6 class="text-center">
                  <input type="submit" class="btn btn-primary" value="Iniciar Ayuno"><br><br>
                  En caso de tener duda sobre los diferentestipos de ayuno, puedes informarte haciendo clic 
                  <a href="{{ route('sobreAyuno') }}#tiposAyuno">Aquí</a></h6>
                  @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <ul>
                            {{ session('success') }}
                        </ul>
                    </div>
                  @endif
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>

@endsection