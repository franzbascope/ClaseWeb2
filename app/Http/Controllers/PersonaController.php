<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::all();
        return view("persona/index",compact("personas"));
    }

    public function create(){
        return view("persona/create");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nombre' => 'required|max:50',
            'apellido' => 'required|max:50',
            'edad' => 'required|integer',
        ]);
        $nombre = $request->get("nombre");
        $apellido = $request->get("apellido");
        $edad = $request->get("edad");
        $persona = new Persona();
        $persona->nombre = $nombre;
        $persona->edad = $edad;
        $persona->apellido = $apellido;
        $persona->save();
        return redirect('/personas');
    }
}
