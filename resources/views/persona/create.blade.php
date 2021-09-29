@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{url("/personas")}}">
    @csrf
    <input name="nombre" type="text" placeholder="Ingresa tu nombre"/>
    <input name="apellido" type="text" placeholder="Ingresa tu apellido"/>
    <input name="edad" type="numeric" placeholder="Ingresa tu edad"/>
    <button type="submit">Guardar Persona</button>
</form>