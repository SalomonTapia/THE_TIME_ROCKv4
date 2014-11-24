	<div class="form-group">
		{{Form::label('nom_evento','Nombre del evento: ', array('class' => 'control-label') )}}
		{{Form::text('nom_evento', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('lugar','Lugar: ')}}
		{{Form::text('lugar',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('desc_evento','Descripción del evento: ')}}
		{{Form::textarea('desc_evento', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-actions">
		{{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
	</div>