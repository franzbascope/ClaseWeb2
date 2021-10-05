<?php

namespace Database\Seeders;

use App\Models\Nota;
use App\Models\Student;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // crear estudiante para asignar notas
        $estudiante = new Student();
        $estudiante->nombre = "Test Estudiante";
        $estudiante->codigo = 51946;
        $estudiante->fecha_registro = "2021-10-05";
        $estudiante->save();

        // notas

        $notaProgramacion = new Nota();
        $notaProgramacion->nota = 90;
        $notaProgramacion->materia = "Programacion";
        $notaProgramacion->student_id = $estudiante->id;
        $notaProgramacion->save();


    }
}
