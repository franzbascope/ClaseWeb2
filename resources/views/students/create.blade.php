@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear nuevo estudiante</div>
                    <div class="card-body">
                        <form action="{{route("students.store")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre</label>
                                <input name="nombre" required type="text" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Codigo</label>
                                <input name="codigo" required type="number" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha de Registro</label>
                                <input name="fecha_registro" required type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <a href="{{route("students.index")}}" class="btn btn-danger">Cancelar</a>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
