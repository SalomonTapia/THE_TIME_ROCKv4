    <div class="form-group">
        {{Form::label('usuario','Nombre del Usuario', array('class' => 'control-label') )}}
        {{Form::text('usuario', null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{Form::label('password','Contraseña ')}}
        {{Form::password('password',null, array('class' => 'form-control'))  }}
    </div>
    <div class="form-group">
        {{Form::label('conf_pass','Confirmar Contraseña ')}}
        {{Form::text('conf_pass',null, array('class' => 'form-control'))  }}
    </div>
    <div class="form-actions">
        {{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
    </div>