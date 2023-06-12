<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diario;
use App\Models\Ayuno;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\Redirect;
use Carbon\Carbon;

class DiarioController extends Controller
{   
    //Mostrar vista diarioAyuno
    public function mostrar_diario(){

        /*  Obtenemosel usuario, el ayuno actual del usuario, los ayunos pasados
            los ayunos pasados del usuario en orden descendente,
            los registros de diario del usuario, el id del usuario     
        */
        $user = Auth::user();
        $ayuno = Ayuno::where('user_id', $user->id)->where('actualmenteAyunando', true)->get();

        $ayunos = Ayuno::where('user_id', $user->id)->where("actualmenteAyunando", false)->orderByDesc('id')->get();
        $diarios = Diario::where('user_id', $user->id)->orderBy('pesoInicial')->distinct('imc')->get()->unique('imc');
        $users = User::where('id', $user->id)->latest()->get();

        //Verificamos si el timpo de finAyuno sea mayo a la fecha actual
        //En caso de ser mayo o igual actualmenteAyunando es false
        if ($ayuno) {
            foreach($ayuno as $ayun) {
                $inicio = Carbon::parse($ayun->inicioAyuno);
                $fin = Carbon::parse($ayun->finAyuno);
                $ahora = Carbon::now();
                $actualmenteAyunando = $ayun->actualmenteAyunando;
    
                // Verificar si el ayuno ha terminado
                if ($ahora->gt($fin)) {
                    // Actualizar el estado del ayuno y guardar los cambios
                    $ayun->actualmenteAyunando = false;
                    $ayun->save();

                    // Retornar la vista con los datos necesarios
                    return view("User.diarioAyuno", compact("diarios", "ayunos", "users","ayuno"));   
                }
            }
        }

        // Retornar la vista con los datos necesarios
        return view("User.diarioAyuno", compact("diarios", "ayunos", "users","ayuno"));
    }

    //Crear registro de Diario de Ayuno
    public function crearDiarioAyuno(){
        // Obtener el usuario autenticado actualmente
        $user = Auth::user();

        // Crear un nuevo registro de diario
        $diarios = new Diario();
        $diarios->pesoInicial = $user->peso;
        $diarios->pesoObjetivo = $user->pesoObjetivo;
        $diarios->altura = $user->altura;
        $diarios->imc = $user->calcularIMC();
        $diarios->user_id = $user->id;
        
        //Guardamos en la base de datos
        $diarios->save();
    }

    //Elimina un registro del historial Ayuno
    public function eliminar_registro_ayuno(Request $request){

        // Obtener el usuario autenticado actualmente
        $user = Auth::user();

        // Obtener el ID del registro a eliminar
        $id = $request->input("id");

        // Eliminar el registro de Ayuno
        Ayuno::find($id)->delete();

        return redirect()->route("mostrar_diario")->with('refresh', true);
    }

    //Elimina un registro del historial Medidas
    public function eliminar_registro_medidas(Request $request){

        // Obtener el usuario autenticado actualmente
        $user = Auth::user();

        // Obtener el ID del registro a eliminar
        $id = $request->input("id");

        // Eliminar el registro de Diario
        Diario::find($id)->delete();

        return redirect()->route("mostrar_diario")->with('refresh', true);
    }

    //Modificación de peso actual o peso objetivos
    public function modificar_peso(Request $request){
        
        // Obtener el usuario autenticado actualmente
        $user = Auth::user();

        if ($request->input("peso") && $request->input('pesoObjetivo')) {
            $this->validate($request, [
                'peso' => 'required|numeric|min:2|max:500',
                'pesoObjetivo' => 'numeric|min:1|max:500'
            ]);

            // Actualizar y guardar los campos de peso y peso objetivo
            $user->peso = $request->input("peso");
            $user->pesoObjetivo = $request->input('pesoObjetivo');
            $user->save();
        }
        elseif ($request->input("peso")) {
            $this->validate($request, [
                'peso' => 'required|numeric|min:2|max:500',
            ]);

            // Actualizar y guardar el campo de peso
            $user->peso = $request->input("peso");
            $user->pesoObjetivo = $user->pesoObjetivo;
            $user->save(); 
        }
    
        // Crear un nuevo registro de diario
        $crearDiario = new DiarioController();
        $crearDiario->crearDiarioAyuno();

        // Redirigir al usuario de vuelta a la página de mostrar_diario con un mensaje de éxito
        return redirect()->route('mostrar_diario')->with('success', 'Medidas Actualizadas');
    }
}