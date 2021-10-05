@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Estudiantes</div>
                    <a style="text-align: left" href="{{route("students.create")}}" class="btn btn-link">Nuevo Estudiante</a>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Fecha de Registro</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->nombre }}</td>
                                    <td> {{ $student->codigo }} </td>
                                    <td>{{ $student->fecha_registro }}</td>
                                    <td>
                                        <a href="{{route("students.edit",$student->id)}}" class="btn btn-info">Editar</a>
                                        <form action="{{route("students.destroy",$student->id)}}" method="POST" style="display: contents">
                                            @method("DELETE")
                                            @csrf
                                            <button onclick="return confirm('Esta seguro de eliminar?')" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
