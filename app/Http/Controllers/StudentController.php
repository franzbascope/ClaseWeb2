<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $students = Student::all();
        return view("students.index",compact("students"));
    }

    public function notas($id)
    {
        $student = Student::find($id);
        return view("students.notas",compact("student"));
    }

    public function notasApi($id)
    {
        $student = Student::find($id);
        return $student->notas;
    }


    public function materias($id)
    {
        $student = Student::find($id);
        return view("students.materias",compact("student"));
    }


    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $materias = Materia::all();
        return view("students.create",compact("materias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:50',
            'codigo' => 'required|numeric',
            'fecha_registro' => 'required|date',
        ]);
        // Manera A
//        $student = new Student();
//        $student->nombre = $request->get("nombre");
//        $student->codigo = $request->get("codigo");
//        $student->fecha_registro = $request->get("fecha_registro");
//        $student->save();
        // Manera B
        // Solo llenara los atributos que estan como fillable
        $student = Student::create($validated);
        foreach ($request->get("materias") as $materia_id){
            $student->materias()->attach($materia_id);
        }
        return response()->redirectTo("/students");
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     */
    public function show($id)
    {
        $student = Student::query()->find($id);
        return view("students.show",compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     */
    public function edit($id)
    {
        $student = Student::query()->find($id);
        $materiasId = $student->materias->map(function ($materia) {
            return $materia->id;
        })->toArray();
        $materias = Materia::all();
        return view("students.edit",compact("student","materiasId","materias"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|max:50',
            'codigo' => 'required|numeric',
            'fecha_registro' => 'required|date',
        ]);
        $student = Student::query()->find($id);
        if(!$student){
            throw new \Exception("No existe el estudiante");
        }
        $student->update($validated);
        $student->materias()->detach();
        if($request->get("materias")){
            foreach ($request->get("materias") as $materia_id){
                $student->materias()->attach($materia_id);
            }
        }

        return redirect("/students");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $student
     */
    public function destroy(string $id)
    {
       $student = Student::query()->find($id);
       if(!$student){
          throw new \Exception("No existe el estudiante");
       }
       $student->delete();
       return redirect("/students");
    }
}
