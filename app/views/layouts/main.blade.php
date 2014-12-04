<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THE TIME ROCK</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/assets/logo.ico">
    <script type="text/javascript" src="<?= url('/assets/ckeditor/ckeditor.js')?>"></script>
    <script>CKEDITOR.replace('content');</script>

    <script src="//cdn.ckeditor.com/4.4.5.1/standard/ckeditor.js"></script>

    <script src="/assets/xing-wysihtml5-fb0cfe4/parser_rules/advanced.js"></script>
    <script src="/assets/xing-wysihtml5-fb0cfe4/dist/wysihtml5-0.3.0.min.js"></script>
    <script>
    var editor = new wysihtml5.Editor("wysihtml5-textarea", { // id of textarea element
      toolbar:      "wysihtml5-toolbar", // id of toolbar element
      parserRules:  wysihtml5ParserRules // defined in parser rules set 
    });
    </script>
  </head>
  <body style="" background="/assets/fondo_web.jpg">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div align="center">
          <img src="/assets/logo.png" height="300" width="500">
        </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">The time rock</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font color="red"><strong>Inicio</font></strong></a>
        </div>
        <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">   
              <a class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Noticias </strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/reports">Mis noticias</a></li>
                <li><a href="http://localhost:8000/reports/create">Agregar Noticia</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Eventos</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/occations">Mis eventos</a></li>
                <li><a href="http://localhost:8000/occations/create">Agregar evento</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Discografía</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/discographyes">Mis discografias</a></li>
                <li><a href="http://localhost:8000/discographyes/create">Agregar discografia</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
          </form>


        <p class="nav navbar-nav navbar-right" font color="red">
        
        {{ Auth::user()->usuario}}
                  
        </p>
        
          
        </p>          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="red"><strong>Cuenta</strong></font><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://localhost:8000/users">Mi cuenta</a></li>
                <li><a href="#">Configuración</a></li>
                <li class="divider"></li>
                <li>
                  @if ( Auth::check())
                  <a href="{{ URL::to ('logout') }}">Cerrar Sesion</a>
                  @else
                  <a href="{{ URL::to ('login') }}">Login</a>
                  @endif

                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <div class="col-md-2"></div>
    	<div class="row">
        	<div class="col-md-6">
                <font color="white">
        		        @yield('main')
        		    </font>
          </div>
    	</div>
    </div>
	   <script src="/assets/js/jquery-1.11.1.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>