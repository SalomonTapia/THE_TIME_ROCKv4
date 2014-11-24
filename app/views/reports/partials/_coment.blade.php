<div class="form-group">
	{{Form::label('coment','Comentario: ', array('class' => 'control-label')) }}
	{{Form::textarea('coment', null, array('class' => 'form-control')) }}
</div>
<div class="form-actions">
	{{Form::submit($submit_text,array('class' => 'btn btn-primary')) }}
</div>