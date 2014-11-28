@section('main')
<h2>Nuevo Comentario</h2>
{{Form::model(new Coment, ['route'=>['coments.store']]) }}
@include('occations/partials/_form',['submit_text'=>'Registrar comentario'])
{{Form::close()}}
@stop
