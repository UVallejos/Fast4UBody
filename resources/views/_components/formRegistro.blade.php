<form name="registerForm" action="{{ $action }}" method="POST">
                    <h1>{{$title}}</h1>
                    @csrf
                    <div class="mt-4 mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" minlength="2" maxlength="50" required />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" minlength="2" maxlength="75" required />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="altura" placeholder="Altura en Cm" minlength="2" maxlength="75" pattern="[0-9]+" required />
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="text" class="form-control" name="peso" placeholder="Peso Actual Kg" pattern="[0-9]+" required />
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="pesoObjetivo" placeholder="Peso objetivo Kg" pattern="[0-9]+" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Introduce Contraseña" minlength="8" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-lg float-right" id="btnRegister">{{ $button_sub }}</button>
                    </div>
                </form>