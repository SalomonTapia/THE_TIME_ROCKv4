@section('main')
<h1><font color="Red">Nuevo  Evento</font></h1>

{{Form::model(new Occation, ['route'=>['occations.store'], 'role' => 'form', 'class' => 'form-horizontal']) }}
@include('occations/partials/_form',['submit_text'=>'Registrar Evento'])
{{Form::close()}}
@stop