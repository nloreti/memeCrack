<?php session_start();session_destroy();session_start(); $_SESSION['hashtags']='';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">

<title>Visualizaci&oacute;n de la Informaci&oacute;n - ITBA - 2012</title>
</head>

<body>
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
	      	<a class="brand" href="#">
			  MEME Geneartor - Trivia Crack
			</a>
			<ul class="nav">
			  <li class="active">
                <a href="./index.php">Home</a>
              </li>
                
			</ul>
		</div>
	  </div>
	</div>
    <div class="container">
        <div class="filtros span3">
            <form action="meme.php" method="post">
                <div>Modelo a Usar:</div>
                <select id="tipoBackground">
                    <option value="historia" selected>Historia</option>
                    <option value="ciencia">Ciencia</option>
                    <option value="arte">Arte</option>
                    <option value="deporte">Deporte</option>
                    <option value="geografia">Geografia</option>
                </select>
                Pregunta linea 1:<input name="pregunta1" id="pregunta1"/>
                Pregunta linea 2:<input name="pregunta2" id="pregunta2"/>
                Pregunta linea 3:<input name="pregunta3" id="pregunta3"/>
                Opcion 1:<input name="opcion1" id="opcion1"/>
                Opcion 2:<input name="opcion2" id="opcion2"/>
                Opcion 3:<input name="opcion3" id="opcion3"/>
                Opcion Correcta:<input name="opcion_correcta" id="opcion_correcta"/>
                <!--Cantidad de tweets:<input name="cantidad" id="cantidad"/>-->
                
                <input type="submit" class="btn btn-primary btn-large" value="Generar"/>
                <input name="valorSelect" id="valorSelect" type="hidden" value="usuario"/>
                <input name="valorTexto" id="valorTexto" type="hidden"/>
              <!--  <input name="valorCantidad" id="valorCantidad" type="hidden"/>-->
                <input name="valorTiempo" id="valorTiempo" type="hidden"/>
                <input name="round" id="round" type="hidden" value="0"/>
                <input name="active" id="active" type="hidden" value="1"/>
            </form>
        </div>
	</div>
</body>

</html>
