
<div style="margin: 300px">
    <h1>Formulario Ciudad</h1>
    <form method="POST" action="{{url("/test")}}">
        @csrf
        <input name="nombreCiudad" type="text" placeholder="Ingresa el nombre de tu ciudad"/>
        <button type="submit">Enviar datos</button>
    </form>

    @if( isset($nombreCiudad))
        <h1>Hola soy la ciudad {{ $nombreCiudad }}</h1>
    @endif

</div>

