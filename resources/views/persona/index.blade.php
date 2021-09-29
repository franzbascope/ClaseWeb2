
<h1>Personas</h1>
<a href="{{url('/personas/create')}}">Crear nueva Persona</a>
<table>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    @foreach($personas as $persona)
    <tr>
        <td>{{ $persona->nombre }}</td>
        <td> {{ $persona->apellido}}</td>
        <td> {{$persona->edad}}</td>
    </tr>
    @endforeach
</table>