@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Materuas</div>
                    <a style="text-align: left" href="{{route("materias.create")}}" class="btn btn-link">Nueva Materia</a>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Sigla</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materias as $materia)
                                <tr>
                                    <td>{{ $materia->name }}</td>
                                    <td> {{ $materia->sigla }} </td>
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
