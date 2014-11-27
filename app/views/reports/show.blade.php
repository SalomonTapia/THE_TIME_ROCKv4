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

@stop