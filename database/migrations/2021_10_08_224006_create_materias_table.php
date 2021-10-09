<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);
            $table->string("sigla",50)->nullable();
            $table->timestamps();
        });

        Schema::create('materia_student', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("student_id")->unsigned();
            $table->bigInteger("materia_id")->unsigned();
            $table->foreign("student_id")->references("id")->on("students")->onDelete("cascade");
            $table->foreign("materia_id")->references("id")->on("materias")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
        Schema::dropIfExists('materia_student');
    }
}
