@section('main')
<font color="blue">
	<h2>{{$discographye->nombre}}</h2>
</font>

<strong>
	<span>
		Por:{{$discographye->user->usuario}} el {{$discographye->created_at}}
	</span>
</strong>
<p>
<strong>Descripcion:</strong>
	{{$discographye->descripcion}}
</p>
@stop