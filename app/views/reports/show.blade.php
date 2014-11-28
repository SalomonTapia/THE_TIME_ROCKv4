@section('main')
<font color="red">
	<h2>{{$report->nom_reporte}}</h2>
</font>
<strong>
	<span>
		Por:{{$report->user->usuario}} el {{$report->created_at}}
	</span>
</strong>
<p>
	{{$report->desc_reporte}}
</p>
<p>
</p>
<!--Comienza-->	
	<div align="left" style="border: 3px solid green; margin-botton:1px;">
		@foreach($report->comments as $comentr)
		<div>
			<strong><span>Por: {{$comentr->user->usuario}} el {{$comentr->created_at}}</span></strong>
			<p></p>
			<p align="left">
				{{$comentr->comentario}}
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
		@include('comentrs/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('reports.index','Volver a mis noticias')}}
</p>
<p>
	{{link_to_route('reports.edit','Editar noticia', $report->id)}}
</p>

@stop