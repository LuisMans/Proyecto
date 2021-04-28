<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function autos(){
        return view('registros.autos');
    }

    public function mascotas(){
        return view('registros.mascotas');
    }

}
