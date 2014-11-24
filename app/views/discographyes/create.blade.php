@section('main')
<h1><font color="Red">Nueva  Discografía</font></h1>

{{Form::model(new Discographye, ['route'=>['discographyes.store'], 'role' => 'form', 'class' => 'form-horizontal']) }}
@include('discographyes/partials/_form',['submit_text'=>'Registrar Discografía'])
{{Form::close()}}
@stop