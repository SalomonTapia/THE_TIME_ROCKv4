@section('main')
<h1><font color="Red">Nuevo Usuario</font></h1>

{{Form::model(new User, ['route'=>['users.store'], 'role' => 'form', 'class' => 'form-horizontal']) }}
@include('users/partials/_form',['submit_text'=>'Registrar Usuario'])
{{Form::close()}}
@stop