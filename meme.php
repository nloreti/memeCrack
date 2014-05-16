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
<meta property="article:publisher" content="https://www.facebook.com/x" />
 -->




<title>Trivia Crack Generator</title>
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
            <?php 
            $pregunta1 = $_POST["pregunta1"];
            //$pregunta2 = $_POST["pregunta2"];
            //$pregunta3 = $_POST["pregunta3"];
            $opcion1 = $_POST["opcion1"];
            $opcion2 = $_POST["opcion2"];
            $opcion3 = $_POST["opcion3"];
            $respuesta_correcta = $_POST["opcion_correcta"];
            $hash = hash('md5', $pregunta1.$opcion1.$opcion2.$opcion3);
            //echo $pregunta1;
            $command = "java -jar memeGenerator.jar "."\"".$pregunta1."\" \"".$opcion1."\" \"".$opcion2."\" \"".$opcion3."\" \"".$respuesta_correcta."\" \"".$hash."\"";
            //echo $command;
            exec($command);
            //echo $output; 
            $filename = $hash.".png";
            //echo $filename;
            echo "<img width='240' src='./".$filename."'>";
            //$imagick = new Imagick(); 
            //$imagick->readImage($filename); 
            //$im = imagecreatefrompng($filename);
            //header('Content-Type: image/png');
            //imagepng($im);
            //die();
           
            //$image = readfile($filename);
            // Read image path, convert to base64 encoding
            //$imageData = base64_encode(file_get_contents($image));

            // Format the image SRC:  data:{mime};base64,{data};
            //$src = 'data: '.mime_content_type($image).';base64,'.$imageData;


            echo "<div class='fb-share-button' data-href='http://triviacrackgenerator.com/" . $filename . "' data-type='button'></div>"
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
                }
            </style> 

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
