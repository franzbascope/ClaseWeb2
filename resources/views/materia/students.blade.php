@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Estudiantes de la materia {{$materia->name}}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materia->students as $student)
                                <tr>
                                    <td>{{ $student->nombre }}</td>
                                    <td> {{ $student->codigo }} </td>
                                    <td>
                                        <a href="{{route("materias.estudiantes",$materia->id)}}" class="btn btn-info">Ver Estudiantes</a>
                                        <a href="{{route("materias.edit",$materia->id)}}" class="btn btn-info">Editar</a>
                                        <form action="{{route("materias.destroy",$materia->id)}}" method="POST" style="display: contents">
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
