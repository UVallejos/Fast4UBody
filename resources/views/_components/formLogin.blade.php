<form name="loginForm" action="{{ $action }}" method="POST">
                    @csrf
                    <h1>{{ $title }}</h1>
                    <div class="mt-4 mb-3">
                    <input type="text" class="form-control" name="email" placeholder="Correo de la cuenta" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">{{ $button_sub }}</button>
                    </div>
</form>