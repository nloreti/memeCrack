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
			  <li>
                <a href="./index.php">Home</a>
              </li>
                <li class="active">
                    <a href="./comparacion.php">Generator</a>
                </li>
			</ul>
		</div>
	  </div>
	</div>
    <div class="container">
        <?php 
        $pregunta1 = $_POST["pregunta1"];
        $pregunta2 = $_POST["pregunta2"];
        $pregunta3 = $_POST["pregunta3"];
        $opcion1 = $_POST["opcion1"];
        $opcion2 = $_POST["opcion2"];
        $opcion3 = $_POST["opcion3"];
        $respuesta_correcta = $_POST["opcion_correcta"];
        $command = "java -jar memeGenerator.jar "."\"".$pregunta1."\" \"".$pregunta2."\" \"".$pregunta3."\" \"".$opcion1."\" \"".$opcion2."\" \"".$opcion3."\" \"".$respuesta_correcta."\"";
        echo $command;
        $output = exec($command);
        echo $output; 
        ?>
        
	</div>
</body>

</html>
