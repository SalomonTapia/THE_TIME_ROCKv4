<div class="form-group">
{{Form::model(new Coment,['route'=>['reports.comentrs.store',$report->id]])}}
  @include('comentrs/partials/_form',['submit_text'=>'Comentar...'])
{{Form::close()}}
</div>