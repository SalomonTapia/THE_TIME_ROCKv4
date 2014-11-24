	<div class="form-group">
		{{Form::label('nom_reporte','Nombre de la noticia: ', array('class' => 'control-label') )}}
		{{Form::text('nom_reporte', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('desc_reporte','Descripción de la noticia: ')}}
		{{Form::textarea('desc_reporte', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-actions">
		{{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
	</div>