<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class DatosController extends Controller
{

    public function contacto(){
        return view('formularios.contacto');
    }

    public function store(){
       
    }

    public function contactoin(){
       return view('formularios.G');
    }

    public function mascota(){
        return view('formulariosM.mascota');
    }

    public function mascotain(){
        return view('formulariosM.G2');
    }
}
