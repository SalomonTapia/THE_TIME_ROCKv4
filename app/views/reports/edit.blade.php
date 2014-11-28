@section('main')
<h2>Editar Evento</h2>
	{{ Form::model($report,  array('method' => 'PATCH', 'route' => ['reports.update', $report->id],'role' => 'form', 'class' => 'form-horizontal') ) }}
		@include('reports/partials/_form', ['submit_text' => 'Actualizar'])
	{{ Form::close()}}
@stop
