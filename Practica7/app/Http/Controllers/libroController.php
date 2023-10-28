<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibros;

class libroController extends Controller {

    public function Inicio(){
        return view('principal');

    }

    public function registroLibros(){
        return view('registroLibro');

    }

    public function guardarRecuerdo(validadorFormRecuerdos $req){

        return redirect('/form')->with('confirmacion','Tu recuerdo llego al controlador');

    }
}