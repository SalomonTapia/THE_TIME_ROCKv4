<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>THE TIME ROCK</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('Includes.Styles');
        <?php echo HTML::style("css/login.css"); ?> 
	     </head>    
         <body>
         <div>
         <img src="/assets/rock2.jpg">
        <div id="container">
            <div id="logo">
                <img src="img/logo.png" alt="" width="50" height="150">
            </div>
            <div id="loginbox">             
                <form id="loginform" action="login" method="post">
    				<p>Introduzca usuario y contraseña para Acceder.</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input class="form-control" id="username" placeholder="Usuario" type="text" name="username"/>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                        <i class="fa fa-lock"></i></span>
                        <input class="form-control" id="password" placeholder="Contraseña" type="password" name="password"/>
                    </div>
                    <div>
                        <input type="checkbox" name="remember" value="1">Recuerdame</input>
                    </div>
                    <div class="form-actions clearfix">                      
                        <input class="btn btn-block btn-primary btn-default" value="Acceder" type="submit"/>
                    </div>
               
                </form>
                </div>
                <div>
                   -<p align="center">
            -       {{link_to_route('users.create','Registrate')}}
                    -</p>
                </div>
                <div>
                    -<p align="center">
            -       {{link_to_route('users.create','Acceder como Invitado')}}
                    -</p>
                </div>

        <?php echo HTML::script("js/jquery.js"); ?> 
        <?php echo HTML::script("js/jquery-ui.js"); ?> 
        <?php echo HTML::script("js/login.js"); ?>  
        </div>
</body>
</html>