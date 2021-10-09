<?php

namespace Database\Seeders;

use App\Models\Materia;
use App\Models\Student;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $programacion = new Materia();
       $programacion->name = "Programacion I";
       $programacion->sigla = "PI";
       $programacion->save();

        $baseDatos = new Materia();
        $baseDatos->name = "Base de Datos I";
        $baseDatos->sigla = "BDI";
        $baseDatos->save();

        $student = Student::query()->where("codigo","=","528136")->first();

        $jugador456 = new Student();
        $jugador456->nombre = "Jugador 456";
        $jugador456->codigo = 456;
        $jugador456->fecha_registro = "2021-10-08";
        $jugador456->save();


        $student->materias()->attach($programacion->id);
        $student->materias()->attach($baseDatos->id);

        $jugador456->materias()->attach($programacion->id);
    }
}
