<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Diario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   
    public function registro(Request $request){

        $user = new User();

        $user-> name = $request -> username;
        $user-> email = $request -> email;
        $user-> pesoObjetivo = $request -> pesoObjetivo;
        $user-> peso = $request -> peso;
        $user-> altura = $request -> altura;
        $user-> password = Hash::make($request -> password);

        $user->save();

        Auth::login($user);
        
        //Obtenemos los datos del usuario para registrarlo en el diarío de Ayuno
        $crearDiario = new DiarioController();
        $crearDiario->crearDiarioAyuno();

        return redirect(route("mi_cuenta"));
    }

    public function iniciar_sesion(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            // Autenticación exitosa, redireccionar al usuario
            $request->session()->regenerate();
            return redirect()->intended(route("mi_cuenta"));
        }
        else{
            //Autenticación fallida, indicamos error en los datos
            return redirect()->back()->withErrors(['email' => 'Correo o Contraseña Incorrectos']);
        }

    }

    public function cerrar_sesion(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route("iniciarSesion"));
    }

    public function mostrar_usuario(){
        $user_id = auth()->id();
        $user = User::find($user_id);

        return view("User.miCuenta", ["user" => $user]);
    }

    public function modificar_usuario(Request $request){
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
