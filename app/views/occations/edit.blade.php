@section('main')
<h2>Editar Evento</h2>
	{{ Form::model($occation,  array('method' => 'PATCH', 'route' => ['occations.update', $occation->id],'role' => 'form', 'class' => 'form-horizontal') ) }}
		@include('occations/partials/_form', ['submit_text' => 'Actualizar'])
	{{ Form::close()}}
@stop
