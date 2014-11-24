@section('main')
<h2>Discografías</h2>
@if (!$discographyes->count())
Aun  no has creado ninguna discografía
@else
<ul>
	@foreach($discographyes as $discography)
	<li>
		<a href="{{route('discographyes.show',$discography->id)}}">
		<strong>{{$discography->nombre}}</strong>
		<p>{{$discography->banda}}</p></a>
	</li>
	@endforeach
</ul>
@endif
@stop