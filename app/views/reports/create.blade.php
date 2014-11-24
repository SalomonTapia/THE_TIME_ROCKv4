@section('main')
<h1><font color="Red">Nueva  Noticia</font></h1>

{{Form::model(new Report, ['route'=>['reports.store'], 'role' => 'form', 'class' => 'form-horizontal']) }}
@include('reports/partials/_form',['submit_text'=>'Registrar Noticia'])
{{Form::close()}}
@stop