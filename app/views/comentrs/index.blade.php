@section('main')
<h2>Comentarios de noticias</h2>
@if (!$comentrs->count())
Aun  no se ha creado ninguna noticia
@else
<ul>
	@foreach($comentrs as $report)
	<li>
		<a href="{{route('comentrs.show',$report->id)}}">
		<strong>{{$report->coment}}</strong></a>
	</li>
	@endforeach
</ul>
@endif
@stop