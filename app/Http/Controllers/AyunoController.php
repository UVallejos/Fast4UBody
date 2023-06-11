<?php

namespace App\Http\Controllers;

use App\Models\Ayuno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diario;
use Carbon\Carbon;

class AyunoController extends Controller
{
    
    public function iniciar_ayuno(){
        return view("User.iniciarAyuno");
    }

    public function registrarAyuno(Request $request){
        $user = Auth::user();

        // Obtener el último registro de ayuno ordenado por fecha de fin en orden descendente
        $ultimoAyuno = Ayuno::where('user_id', $user->id)->orderBy('finAyuno', 'desc')->first();
        
        // Verificar si el último registro de ayuno tiene actualmenteAyunando = true
        if ($ultimoAyuno && $ultimoAyuno->actualmenteAyunando) {
            return redirect()->route("iniciar_ayuno")->withErrors(['error' => 
            'Actualmente ya se está ayunando, puede finalizar el ayuno en "Mi diario de Ayuno".']);
        }

        $inicioAyuno = Carbon::now();
        $inicioAyunoM = Carbon::now();
        $tipoAyuno = $request->input("tipo_ayuno");
        $finAyuno = $inicioAyunoM->addHours($tipoAyuno);

        $ayunos = new Ayuno();
        $ayunos->inicioAyuno = $inicioAyuno;
        $ayunos->finAyuno = $finAyuno;
        $ayunos->tipoAyuno = $tipoAyuno;
        $ayunos->user_id = $user->id;
        $ayunos->actualmenteAyunando= true;
        $ayunos->save();

        // Actualizar la variable de sesión con los nuevos registros
        $ayuno = Ayuno::where('user_id', $user->id)->get();
        $diario = Diario::where('user_id', $user->id)->get();
        $data = collect([$ayuno,$diario])->collapse();
        session(['user_data' => $data]);

        // Redirigir al usuario de vuelta a la página "User.diarioAyuno"
        return redirect()->route('mostrar_diario');


    }

    public function finalizarAyuno(Request $request)
{
        $user = Auth::user();

        // Obtener el último registro de ayuno ordenado por fecha de fin en orden descendente
        $ultimoAyuno = Ayuno::where('user_id', $user->id)->orderBy('finAyuno', 'desc')->first();


        // Actualizar la fecha y hora de fin del ayuno con la fecha y hora actual
        $ultimoAyuno->finAyuno = Carbon::now();
        $ultimoAyuno->actualmenteAyunando = false;
        $ultimoAyuno->save();
        $ultimoAyuno->actualmenteAyunando;

        return redirect()->route("mostrar_diario", compact($ultimoAyuno->actualmenteAyunando));
    }


}
