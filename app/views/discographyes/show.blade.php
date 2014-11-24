@section('main')
<font color="blue">
	<h2>{{$discography->nombre}}</h2>
</font>

<strong>
	<span>
		Por:{{$discography->user->usuario}} el {{$discography->created_at}}
	</span>
</strong>
<p>
<strong>Descripcion:</strong>
	{{$discography->descripcion}}
</p>
@stop