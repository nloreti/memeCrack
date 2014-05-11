<?php session_start();session_destroy();session_start(); $_SESSION['hashtags']='';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type="text/javascript" src="./bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrapValidator.min.js"></script>

<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrapValidator.min.css" />
<meta name="description" content="Generate your own trivia crack meme" />

<title>Trivia Crack Generator</title>

<!-- Facebook Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width"/>
<meta property="og:title" content="Trivia Crack Generator"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="http://triviacrackgenerator.com"/>
<meta property="og:description" content="Generate your own trivia crack meme" />
<meta property="og:site_name" content="Trivia Crack Generator"/>
<meta property="og:image" content="http://triviacrackgenerator.com/logo.png"/>

<script type="text/javascript">
$(document).ready(function() {
    $('#questionForm').bootstrapValidator();
});
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
    background-image: linear-gradient(to bottom,#FFF 0,#00A3FF 100%);
  }
  
</style>

</head>

<body>

<header class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-brand">
      <img src="./logo.png" style="float:left;margin-top:25px; margin-right:10px;"/>
      <a href="http://www.triviacrackgenerator.com" class="navbar-brand">Trivia Crack <br/>Generator</a>
    </div>
    <nav class="navbar-default" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Expo']);">Ayuda</a></li>
      </ul>
      <div class="google-rectangle-add">
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
    </nav>
  </div>
</header>

  <div class="container">
    <div class="row-fluid">
      <div class="col-md-4">
            <form role="form" id="questionForm" action="meme.php" method="post"
              data-bv-message="Este valor no es válido"
              data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
              data-bv-submitbuttons='button[type="submit"]'
              data-bv-live="enabled"
            >
                <div class="form-group">
                  <label>Modelo a Usar:</label>
                  <select class="form-control" id="tipoBackground">
                      <option value="historia" selected>Historia</option>
                      <option value="ciencia">Ciencia</option>
                      <option value="arte">Arte</option>
                      <option value="deporte">Deporte</option>
                      <option value="geografia">Geografia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pregunta:</label>
                  <textarea name="pregunta" id="pregunta" maxlength="89" class="form-control"
                    data-bv-notempty="true"
                    data-bv-notempty-message="El campo 'pregunta' es requerido y no puede quedar vacio"
                    data-bv-stringlength="true"
                    data-bv-stringlength-min="20"
                    data-bv-stringlength-max="90"
                    data-bv-stringlength-message="La pregunta debe tener entre 20 y 89 caracteres"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label>Respuesta 1:</label>
                  <input name="opcion1" id="opcion1" maxlength="30"
                    data-bv-notempty="true"
                    data-bv-notempty-message="El campo 'respuesta 1' es requerido y no puede quedar vacio"
                    data-bv-stringlength="true"
                    data-bv-stringlength-min="1"
                    data-bv-stringlength-max="30"
                    data-bv-stringlength-message="La respuesta debe tener entre 1 y 30 caracteres"
                  />
                </div>
                <div class="form-group">
                  <label>Respuesta 2:</label>
                  <input name="opcion2" id="opcion2" maxlength="30"
                    data-bv-notempty="true"
                    data-bv-notempty-message="El campo 'respuesta 2' es requerido y no puede quedar vacio"
                    data-bv-stringlength="true"
                    data-bv-stringlength-min="1"
                    data-bv-stringlength-max="30"
                    data-bv-stringlength-message="La respuesta debe tener entre 1 y 30 caracteres"
                  />
                </div>
                <div class="form-group">
                  <label>Respuesta 3:</label>
                  <input name="opcion3" id="opcion3" maxlength="30"
                    data-bv-notempty="true"
                    data-bv-notempty-message="El campo 'respuesta 3' es requerido y no puede quedar vacio"
                    data-bv-stringlength="true"
                    data-bv-stringlength-min="1"
                    data-bv-stringlength-max="30"
                    data-bv-stringlength-message="La respuesta debe tener entre 1 y 30 caracteres"
                    />
                </div>
                <div class="form-group">
                  <label>Respuesta correcta:</label>
                  <input name="opcion_correcta" id="opcion_correcta" maxlength="30"
                    data-bv-notempty="true"
                    data-bv-notempty-message="El campo 'respuesta correcta' es requerido y no puede quedar vacio"
                    data-bv-stringlength="true"
                    data-bv-stringlength-min="20"
                    data-bv-stringlength-max="90"
                    data-bv-stringlength-message="La respuesta debe tener entre 1 y 30 caracteres"
                  />
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-large btn-primary">Generar</button>
                </div>
            </form>
        </div>
        <div class="col-md-4">Columna 2</div>
        <div class="col-md-4">
                <!-- Banner-2 -->
          <div class="google-square-add">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-9140523267616881"
                 data-ad-slot="7668084543"></ins>
            <script type="text/javascript">
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>

              <!-- Banner-3 -->
          <div class="google-square-add">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-9140523267616881"
                 data-ad-slot="7668084543"></ins>
            <script type="text/javascript">
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div><!-- /Columna 3 -->
      </div> <!-- /Row-fluid -->
      <div class="fb-share-button" data-href="http://triviacrackgenerator.com/a83920d1348eee579e4d5e2037b93657.png" data-type="button_count"></div>
    </div> <!-- /Container -->

</body>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50863215-1', 'triviacrackgenerator.com');
  ga('send', 'pageview');
</script>
</html>
