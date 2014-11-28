@section('main')
<font color="blue">
<h1><strong>Disco</strong></h1>
	<h2>{{$discography->nombre}}</h2>
</font>

<strong>Imagen:</strong>
	{{$discography->imagen}}
</p>
<strong>
	<span>
		Por:{{$discography->user->usuario}} el {{$discography->created_at}}
	</span>
</strong>
<p>
<strong>Banda:</strong>
	{{$discography->banda}}
</p>
<strong>Genero:</strong>
	{{$discography->genero}}
</p>
<strong>Url:</strong>
	{{$discography->url}}
</p>
<strong>Descripcion:</strong>
	{{$discography->descripcion}}
</p>
<!--Comienza-->	
	<div align="left" style="border: 3px solid green; margin-botton:1px;">
		@foreach($discography->comments as $comentrs)
		<div>
			<strong><span>Por: {{$comentrs->user->usuario}} el {{$comentrs->created_at}}</span></strong>
			<p></p>
			<p align="left">
				{{$comentrs->coment}}
			</p>
			<div align="center">
				{{link_to_route('comentrs.destroy','Eliminar Comentario')}}
			</div>
		</div>
		@endforeach
	</div>
<!--Termina-->	
	<div align="center">
		<h3>
			<strong>Agregar nuevo comentario</strong>
		</h3>
	</div>
	<div align="center">
		@include('comentds/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('discographyes.index','Volver a mis discografías')}}
</p>
<p>
	{{link_to_route('discographyes.edit','Editar discografía', $discography->id)}}
</p>
@stop