@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar estudiante</div>
                    <div class="card-body">
                        <form action="{{route("students.update",$student->id)}}" method="POST">
                            @method("PUT")
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input value="{{$student->nombre}}" name="nombre" required type="text" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Codigo</label>
                                <input value="{{$student->codigo}}" name="codigo" required type="number" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Registro</label>
                                <input value="{{$student->fecha_registro}}" name="fecha_registro" required type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
