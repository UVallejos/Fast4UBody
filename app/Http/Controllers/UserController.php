<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Diario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{  
    //Muestra la vista miCuenta
    public function mostrar_usuario(){
        $user_id = auth()->id();
        $user = User::find($user_id);

        return view("User.miCuenta", ["user" => $user]);
    }
    
    //Registro de Usuarios
    public function registro(Request $request){

        //Cumplementamos campos del registro en l base de datos
        $user = new User();

        $user-> name = $request -> username;
        $user-> email = $request -> email;
        $user-> pesoObjetivo = $request -> pesoObjetivo;
        $user-> peso = $request -> peso;
        $user-> altura = $request -> altura;
        $user-> password = Hash::make($request -> password);

        //Guardamos en base de datos
        $user->save();

        //Utilizamos Función login y pasamos el $user que hemos creado
        Auth::login($user);
        
        //Obtenemos los datos del usuario para registrarlo en el diarío de Ayuno
        $crearDiario = new DiarioController();
        $crearDiario->crearDiarioAyuno();

        //Redireccionamos a miCuenta
        return redirect(route("mi_cuenta"));
    }

    //Iniciar sesión con correo y contraseña ya registrados
    public function iniciar_sesion(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            // Autenticación exitosa, redireccionar al usuario
            $request->session()->regenerate();
            return redirect()->intended(route("index"));
        }
        else{
            //Autenticación fallida, indicamos error en los datos
            return redirect()->back()->withErrors(['email' => 'Correo o Contraseña Incorrectos']);
        }

    }

    //Cerrar sesión y redirigir a iniciarSesión
    public function cerrar_sesion(Request $request){

        //Llamada a la función logout() de la clase Auth para cerrar la sesión
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route("iniciarSesion"));
    }

    //Obtenemos datos del formulario y modificamos campos en la base de datos
    public function modificar_usuario(Request $request){

        //Validación de datos
        $this->validate($request, [
            'name' => 'required|string|min:5|max:300',
            'pesoObjetivo' => 'required|numeric|min:1|max:500',
            'altura' => 'required|numeric|min:1|max:300',
            'peso' => 'required|numeric|min:1|max:500'
          ]);

        // Obtener el usuario actual
        $user = Auth::user();

        // Actualizar los campos que se pueden editar
        $user->name = $request->input('name');
        $user->pesoObjetivo = $request->input('pesoObjetivo');
        $user->peso = $request->input("peso");
        $user->altura = $request->input("altura");
        $user->save();

        //Obtenemos los datos del usuario para registrarlo en el diarío de Ayuno
        $crearDiario = new DiarioController();
        $crearDiario->crearDiarioAyuno();

        // Redirigir al usuario de vuelta a la página de mi cuenta
        return redirect()->route('mi_cuenta')->with('success', 'Los datos ha sido actualizada con éxito');
        
    }

}
