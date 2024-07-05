<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    public function mostrarDirectorio(){
        $directorios = Directorio::all();
        return view('directorio', compact('directorios'));
    }

}


