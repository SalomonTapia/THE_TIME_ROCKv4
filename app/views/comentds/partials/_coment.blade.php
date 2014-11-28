<div class="form-group">
{{Form::model(new Comentd,['route'=>['discographyes.comentds.store',$discography->id]])}}
  @include('comentds/partials/_form',['submit_text'=>'Comentar...'])
{{Form::close()}}
</div>