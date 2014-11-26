@section('main')
<<<<<<< HEAD
<font color="red">
	<h2>{{$report->titulo}}</h2>
</font>
<strong>
	<span>
		Por:{{$report->user->nombre}} el {{$report->created_at}}
	</span>
</strong>
<p>
	{{$report->contenido}}
</p>
<p>
	<strong>Tags:</strong>
	{{$report->tags}}
</p>
<!--Comienza-->	
	<div align="left" style="border: 3px solid green; margin-botton:1px;">
=======
<font color="blue">
	<h2>{{$report->nom_reporte}}</h2>
</font>

<strong>
	<span>
		Por:{{$report->user->usuario}} el {{$report->created_at}}
	</span>
</strong>
<p>
<strong>Descripcion:</strong><br>
	{{$report->desc_reporte}}
</p>
<div align="left" style="border: 3px solid green; margin-botton:1px;">
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
		@foreach($report->comments as $coment)
		<div>
			<strong><span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span></strong>
			<p></p>
			<p align="left">
<<<<<<< HEAD
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
=======
			<span class="list-inline">
				{{Form::open(array('class'=>'form-horizontal pull-right','method'=>'DELETE','route'=>array('reports.comentrs.destroy',$report->id,$coment->id)))}}
				{{Form::submit('Eliminar',array('class'=>'btn btn-sm btn-danger'))}}
				{{Form::close()}}
				</span>
			<p>	{{$coment->comentario}} </p>
			</p>
			
		</div>
		@endforeach
	</div>
<div align="center">
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
		<h3>
			<strong>Agregar nuevo comentario</strong>
		</h3>
	</div>
	<div align="center">
<<<<<<< HEAD
		@include('coments/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('posts.index','Volver a Post')}}
</p>
<p>
	{{link_to_route('posts.edit','Editar post', $post->id)}}
=======
		@include('comentrs/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('reports.index','Volver a mis noticias')}}
</p>
<p>
	{{link_to_route('reports.edit','Editar noticia', $report->id)}}
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
</p>
@stop