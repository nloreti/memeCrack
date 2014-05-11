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
<meta name="description" content="Generate your own trivia crack meme" />

<title>Trivia Crack Generator</title>

<!-- Facebook Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width"/>
<meta property="og:image" content="http://triviacrackgenerator.com/logo.png"/>
<meta property="og:title" content="Trivia Crack Generator"/>
<meta property="og:type" content="article"/>
<meta property="og:description" content="Generate your own trivia crack meme" />
<meta property="fb:app_id" content="141188425906733"/>
<meta property="og:url" content="http://triviacrackgenerator.com"/>
<!-- <meta property="article:author" content="https://www.facebook.com/x" />
<meta property="article:publisher" content="https://www.facebook.com/x" /> -->



</head>

<body>
    <!--Facebook share-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=141188425906733&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
                    <img src="./logo.png" style="float:left;margin-top:25px; margin-right:10px;"/>
                    <a class="brand" href="http://triviacrackgenerator.com">
                     Trivia Crack <br/>Generator
        			</a>
    <div style="float:right;margin-top:10px;">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Trivia -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-9140523267616881"
                 data-ad-slot="9730560540"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
             
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
                Pregunta linea 1:<input name="pregunta1" id="pregunta1" maxlength="30"/>
                Pregunta linea 2:<input name="pregunta2" id="pregunta2" maxlength="30"/>
                Pregunta linea 3:<input name="pregunta3" id="pregunta3" maxlength="30"/>
                Opcion 1:<input name="opcion1" id="opcion1" maxlength="30"/>
                Opcion 2:<input name="opcion2" id="opcion2" maxlength="30"/>
                Opcion 3:<input name="opcion3" id="opcion3" maxlength="30"/>
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
        <div class="filtros span8">
            <div class="filtros span8"></div>
            <div class="filtros span4">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner-2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-9140523267616881"
                     data-ad-slot="7668084543"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="filtros span4">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner-2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-9140523267616881"
                     data-ad-slot="7668084543"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="fb-share-button" data-href="http://triviacrackgenerator.com/a83920d1348eee579e4d5e2037b93657.png" data-type="button_count"></div>
        </div>
	</div>

</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50863215-1', 'triviacrackgenerator.com');
  ga('send', 'pageview');
</script>
</html>
