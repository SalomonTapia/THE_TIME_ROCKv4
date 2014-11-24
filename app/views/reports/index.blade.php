@section('main')
<h2>Noticias</h2>
@if (!$reports->count())
Aun  no se ha creado ninguna noticia
@else
<ul>
	@foreach($reports as $report)
	<li>
		<a href="{{route('reports.show',$report->id)}}">
		<strong>{{$report->nom_reporte}}</strong></a>
	</li>
	@endforeach
</ul>
@endif
@stop