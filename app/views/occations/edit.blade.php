<<<<<<< HEAD
@section('main')
<h2>Editar Evento</h2>
	{{ Form::model($occation,  array('method' => 'PATCH', 'route' => ['occations.update', $occation->id],'role' => 'form', 'class' => 'form-horizontal') ) }}
		@include('occations/partials/_form', ['submit_text' => 'Actualizar'])
	{{ Form::close()}}
@stop
=======
/var/www/laravel/THE_TIME_ROCK2/app/views/occations/edit.blade.php
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
