<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diario;
use App\Models\Ayuno;
use Illuminate\Support\Facades\Auth;

class DiarioController extends Controller
{
    public function mostrar_diario(){

        $user = Auth::user();
        //$ayuno = Ayuno::where('user_id', $user->id)->latest()->get();
        $ayuno = Ayuno::where('user_id', $user->id)->latest()->get();
        $ayunos = Ayuno::where('user_id', $user->id)->where("actualmenteAyunando", false)->orderByDesc('id')->get();
        $diarios = Diario::where('user_id', $user->id)->orderByDesc('id')->distinct('imc')->get()->unique('imc');
        $users = User::where('id', $user->id)->latest()->get();
        //$data = collect([$ayuno, $diario])->collapse();
        

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
}