@section('main')
<font color="blue">
	<h2>{{$discographye->nombre}}</h2>
</font>

<strong>
	<span>
		Creado el: {{$discographye->created_at}}
	</span>
</strong>
<p>
<strong>Banda:</strong>
	{{$discographye->banda}}
</p>
<strong>Genero:</strong>
	{{$discographye->genero}}
</p>
<strong>Url de descarga:</strong>
	<a href='http://{{$discographye->url}}'>Descargar</a>
</p>
<strong>Descripcion:</strong>
	{{$discographye->descripcion}}
</p>
<strong>Imagen:</strong>
	<img height="300" width="300" src='/img/{{$discographye->imagen}}'/>
</p>
@stop