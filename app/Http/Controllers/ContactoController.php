<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function crearContacto(){
        return view('agregarContacto');
    }
}
