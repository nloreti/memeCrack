<?php session_start();session_destroy();session_start(); $_SESSION['hashtags']='';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Facebook Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<meta name="viewport" content="width=device-width"/>
<meta property="og:title" content="Trivia Crack Generator"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://triviacrackgenerator.com"/>
<meta property="og:description" content="Crea tu propia pregunta de Preguntados/Trivia Crack" />
<meta property="og:site_name" content="Trivia Crack Generator"/>
<meta property="og:image" content="http://triviacrackgenerator.com/logobig.png"/>
<meta property="fb:app_id" content="104070986315547"/>

<script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrapValidator.min.js"></script>

<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="./bootstrap/css/nav.css" />
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrapValidator.min.css" />


<title>Trivia Crack Generator</title>



<script type="text/javascript">
$(document).ready(function() {
    $('#questionForm').bootstrapValidator();
});
</script>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50863215-1', 'triviacrackgenerator.com');
  ga('send', 'pageview');
</script>

<style type="text/css">
  .has-error .form-control-feedback {
      color: #E74C3C;
  }
  .has-success .form-control-feedback {
      color: #18BCA0;
  }
  .navbar {
    min-height: 115px;
  }
  .navbar-default {
    background-image: linear-gradient(to bottom,#00A3FF 0,#00A3FF 100%);
  }
  
</style>



</head>

<body>
    <!--Facebook share-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=104070986315547&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
	 <div class="navbar2">
      <div class="navbar2-inner">
        <div class="container2">    
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
      <div class="row-fluid">
        <div class="col-md-4" style="height: 100px;">
          <?php
            header('content-type: text/html; charset=utf-8');
            $pregunta1 = $_POST["pregunta1"];
            //$pregunta2 = $_POST["pregunta2"];
            //$pregunta3 = $_POST["pregunta3"];

             $fp = fopen("myText.txt","wb");
            fwrite($fp,$pregunta1);
            fclose($fp);
            
            $opcion1 = $_POST["opcion1"];
            $opcion2 = $_POST["opcion2"];
            $opcion3 = $_POST["opcion3"];
            $respuesta_correcta = $_POST["opcion_correcta"];
            $tipo_background = $_POST["tipoBackground"];

            //echo "ACA ESTA EL RESULTADO: ".$tipo_background;
            $hash = hash('md5', $pregunta1.$opcion1.$opcion2.$opcion3);
            //echo $pregunta1;
            $command = "java -jar memeGenerator.jar "."\"".$pregunta1."\" \"".$opcion1."\" \"".$opcion2."\" \"".$opcion3."\" \"".$respuesta_correcta."\" \"".$tipo_background."\" \"".$hash."\"";
            //echo $command;
           

            exec($command);
            //echo $output; 
            $filename = $hash.".png";
            echo "<div class='fb-share-button' data-href='http://triviacrackgenerator.com/" . $filename . "' data-type='button'></div>";

          ?>
  
          <style>
                  .fb-share-button
                {
                margin-top: 20px;
                transform: scale(2);
                -ms-transform: scale(2);
                -webkit-transform: scale(2);
                -o-transform: scale(2);
                -moz-transform: scale(2);
                transform-origin: top left;
                -ms-transform-origin: top left;
                -webkit-transform-origin: top left;
                -moz-transform-origin: top left;
                -webkit-transform-origin: top left;
                float:right;
                margin-right:70px;
                }
            </style> 
        </div>
        <div class="col-md-4">
            <?php 
              echo "<img width='300' src='./".$filename."'>";
            ?>
            
           
          </div>
          <div class="col-md-4">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Banner-2 -->
            <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-9140523267616881"
                     data-ad-slot="7668084543"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script><br/>
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
        </div>
      </div>
      <div id="footer">
      <div class="container">
        <p class="text-muted">Preguntados y Trivia Crack Generator - 2014</p>
      </div>
    </div>
</body>
</html>
