	<div class="form-group">
		{{Form::label('nombre','Nombre de la discografía: ', array('class' => 'control-label') )}}
		{{Form::text('nombre', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('banda','Banda: ')}}
		{{Form::text('banda',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('genero','Genero: ')}}
		{{Form::text('genero',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('url','Url de descarga: ')}}
		{{Form::text('url',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('descripcion','Descripción del disco: ')}}
		{{Form::textarea('descripcion', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('imagen','Imagen: ')}}
		{{Form::text('imagen',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-actions">
		{{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
	</div>