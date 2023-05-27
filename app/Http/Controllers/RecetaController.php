<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{
    public function mostrar_receta(){
        $recetas = Receta::all();
        return view("User.recetasSaludables", ["recetas" => $recetas]);
    }
}
