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
    public function mostrar_diario(){

        $user = Auth::user();
        //$ayuno = Ayuno::where('user_id', $user->id)->latest()->get();
        $ayuno = Ayuno::where('user_id', $user->id)->where('actualmenteAyunando', true)->get();

        $ayunos = Ayuno::where('user_id', $user->id)->where("actualmenteAyunando", false)->orderByDesc('id')->get();
        $diarios = Diario::where('user_id', $user->id)->orderBy('pesoInicial')->distinct('imc')->get()->unique('imc');
        $users = User::where('id', $user->id)->latest()->get();

        if ($ayuno) {
            foreach($ayuno as $ayun) {
                $inicio = Carbon::parse($ayun->inicioAyuno);
                $fin = Carbon::parse($ayun->finAyuno);
                $ahora = Carbon::now();
                $actualmenteAyunando = $ayun->actualmenteAyunando;
    
                 if ($ahora->gt($fin)) {
                    $ayun->actualmenteAyunando = false;
                    $ayun->save();
                    return view("User.diarioAyuno", compact("diarios", "ayunos", "users","ayuno"));
                    
                 }
            }
        }
        return view("User.diarioAyuno", compact("diarios", "ayunos", "users","ayuno"));
        
    }

    public function crearDiarioAyuno(){
        
        $user = Auth::user();

        $diarios = new Diario();
        $diarios->pesoInicial = $user->peso;
        $diarios->pesoObjetivo = $user->pesoObjetivo;
        $diarios->altura = $user->altura;
        $diarios->imc = $user->calcularIMC();
        $diarios->user_id = $user->id;
        $diarios->save();
    }

    public function eliminar_registro(Request $request){
        $user = Auth::user();

        $id = $request->input("id");

        Ayuno::find($id)->delete();

        return redirect()->route("mostrar_diario")->with('refresh', true);
    }

    public function eliminar_registro_m(Request $request){
        $user = Auth::user();

        $id = $request->input("id");

        Diario::find($id)->delete();

        return redirect()->route("mostrar_diario")->with('refresh', true);
    }

    public function modificar_peso(Request $request){

        // Obtener el usuario actual
        $user = Auth::user();

        if ($request->input("peso") && $request->input('pesoObjetivo')) {
            $this->validate($request, [
                'peso' => 'required|numeric|min:2|max:500',
                'pesoObjetivo' => 'numeric|min:1|max:500'
              ]);
            // Actualizar y guardas los campos
            $user->peso = $request->input("peso");
            $user->pesoObjetivo = $request->input('pesoObjetivo');
            $user->save();
        }
        elseif ($request->input("peso")) {
            $this->validate($request, [
                'peso' => 'required|numeric|min:2|max:500',
              ]);
            $user->peso = $request->input("peso");
            $user->pesoObjetivo = $user->pesoObjetivo;
            $user->save(); 
        }
    
        //Obtenemos los datos del usuario para registrarlo en el diarío de Ayuno
        $crearDiario = new DiarioController();
        $crearDiario->crearDiarioAyuno();

        // Redirigir al usuario de vuelta a la página de mi cuenta
        return redirect()->route('mostrar_diario')->with('success', 'Medidas Actualizadas');
        
    }
}
