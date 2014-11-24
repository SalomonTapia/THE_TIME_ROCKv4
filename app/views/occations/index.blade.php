@section('main')
<h2>Eventos</h2>
@if (!$occations->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($occations as $occation)
	<li>
		<a href="{{route('occations.show',$occation->id)}}">
		<strong>{{$occation->nom_evento}}</strong>
		<p>{{$occation->lugar}}</a>
	</li>
	@endforeach
</ul>
@endif
@stop