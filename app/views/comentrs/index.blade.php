@section('main')
<h2>Comentrs</h2>
@if (!$comentrs->count())
Aun  no se ha crreado Noticia en este blog, vuelve pronto
@else
<ul>
	@foreach($comentrs as $coment)
	<li>
		<a href="{{route('comentrs.show',$coment->id)}}">
		<strong>{{$coment->coment}}</strong></a>
		<p>{{$comentrs->id}}</p>
	</li>
	@endforeach
</ul>
@endif
@stop