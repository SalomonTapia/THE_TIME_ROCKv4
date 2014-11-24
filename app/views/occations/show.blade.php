@section('main')
<font color="Blue">
	<h2>{{$occation->nom_evento}}</h2>
</font>
<strong>
	<span>
		Por:{{$occation->user->usuario}} el {{$occation->created_at}}
	</span>
</strong>
<p>
	{{$occation->lugar}}
</p>
<p>
	<strong>Descripcion:</strong><br>
	{{$occation->desc_evento}}
</p>
<!--Comienza-->	
	<div align="left" style="border: 3px solid green; margin-botton:1px;">
		@foreach($occation->comments as $coment)
		<div>
			<strong><span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span></strong>
			<p></p>
			<p align="left">
				{{$coment->comentario}}
			</p>
			<div align="center">
				{{link_to_route('coments.destroy','Eliminar Comentario')}}
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
		@include('coments/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('occations.index','Volver a mis eventos')}}
</p>
<p>
	{{link_to_route('occations.edit','Editar evento', $occation->id)}}
</p>
@stop