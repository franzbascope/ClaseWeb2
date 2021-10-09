@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Material del estudiante {{$student->nombre}}</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Materia</th>
                                <th scope="col">Sigla</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student->materias as $materia)
                                <tr>
                                    <td>{{ $materia->name }}</td>
                                    <td> {{ $materia->sigla }} </td>
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
