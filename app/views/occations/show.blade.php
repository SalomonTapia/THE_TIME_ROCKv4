@section('main')
<font color="Blue">
	<h2>{{$occation->nom_evento}}</h2>
</font>
<strong>
	<span>
		Por:{{$occation->user->usuario}} el {{$occation->created_at}}
	</span>
</strong>
<p>
	{{$occation->lugar}}
</p>
<p>
	<strong>Descripcion:</strong>
	{{$occation->desc_evento}}
</p>
@stop