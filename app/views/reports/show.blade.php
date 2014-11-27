@section('main')
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
-		@foreach($report->comments as $coment)
-		<div>
-			<strong><span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span></strong>
-			<p></p>
-			<p align="left">
-			<span class="list-inline">
-				{{Form::open(array('class'=>'form-horizontal pull-right','method'=>'DELETE','route'=>array('reports.comentrs.destroy',$report->id,$coment->id)))}}
-				{{Form::submit('Eliminar',array('class'=>'btn btn-sm btn-danger'))}}
-				{{Form::close()}}
-				</span>
-			<p>	{{$coment->comentario}} </p>
-			</p>
-			
-		</div>
-		@endforeach
-	</div>
-<div align="center">
-		<h3>
-			<strong>Agregar nuevo comentario</strong>
-		</h3>
-	</div>
-	<div align="center">
-		@include('comentrs/partials/_coment')
-	</div>
-<p align="center">
-	{{link_to_route('reports.index','Volver a mis noticias')}}
-</p>
-<p>
-	{{link_to_route('reports.edit','Editar noticia', $report->id)}}
-</p>

@stop