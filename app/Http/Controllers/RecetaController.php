<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class RecetaController extends Controller
{   
    //Mostrar las recetas de la base de datos
    public function mostrar_receta(){
        $recetas = Receta::all();
        return view("User.recetasSaludables", ["recetas" => $recetas]);
    }
}
