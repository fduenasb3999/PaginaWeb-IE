<?php

# Incluir el contador de visitas
include_once "contar_visita.php";

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Emotion.ia </title>
    <link rel="stylesheet" href="style-test.css">
    <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/85bf6bb03f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <header>
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="logonuevo.png" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link">Usuario: <?php echo $_SESSION['email'] ?> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="test.php #link_cuestionario">CUESTIONARIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="libreria.php">OTROS USUARIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reporte_visitas.php">PARA TI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">CERRAR SESI??N</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</section> 
</header>
<!---------------secci??n del banner -------------------------------------->
<section id="banner">   
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="promo-title">TEST DE INTELIGENCIA EMOCIONAL</p>
            
            <hr>
                Ser??s evaluado en los siguientes ??mbitos:
            <ul>
                <li> Percepci??n y evaluaci??n de emociones </li>
                <li> Uso de emociones como facilitadores del pensamiento </li>
                <li> Regulaci??n de las emociones </li>
                <li> Gesti??n de emociones propias </li>
                <li> Gesti??n de emociones de otras personas </li>
            </ul>                      
        </div>
        <div class="col-md-6" >
            <figure>
            <img src="home.png" class="img-fluid" alt="home">
            </figure>
        </div>
    </div>
</div>
    <img src="wave1.png" class="bottom-img" alt="onda">
</section>
<!----------------------Test de Inteligencia Emocional-------------------------->
<a id="link_cuestionario"></a>
<section id="test">
    <div class="container text-center">
        
        <h1 class="title">Cuestionario</h1>
            <hr>
        
        <p class="mensaje-incial">Para medir tu inteligencia emocional, encontrar??s 35 afirmaciones asociadas a tus emociones o a las reacciones asociadas a tus emociones. ??Elige la respuesta que mejor te describa!</p>

        <hr>
         <!-- quiz-container -->
    <div id="quiz-container">
        <!-- question container -->
        <div class="questions">
            <h2 id="question"></h2>
            <ol type="A">
                <li class="option"><span id="option0" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option1" onclick="calcScore(this)"></span></li>
                
            </ul>
            <h4 id="stat"></h4>
        </div>

        <div class="buttons">
            <button type="button" class="next">No quiero responder esta pregunta</button>
        </div>

    </div>

    <!-- scoreboard section -->
    <div id="scoreboard">
        <h2 id="score-title">Gracias por participar</h2>
        <h2 id="score"></h2>
        <button type="button" id="score-btn" onclick="backToQuiz()">Volverlo a intentar</button>
        <button type="button" id="check-answer" onclick="checkAnswer()">Conoce tus resultados</button>
    </div>

    <!-- answers section -->
    <div id="answerBank">
        <h2>Tus Resultados</h2>
        
            <p>Percepci??n y evaluaci??n de emociones: <span id="scoreA"></span></p>
            <hr>
            <p>Uso de emociones como facilitadores del pensamiento<span id="scoreB"></span></p>
            <hr>
            <p>Regulaci??n de las emociones<span id="scoreC"></span></p>
            <hr>
            <p>Gesti??n de emociones propias<span id="scoreD"></span></p>
            <hr>
            <p>Gesti??n de emociones de otras personas<span id="scoreE"></span></p>
            <hr>
            <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Calificaci??n</th>
                    <th scope="col">Descripci??n</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="table-success" scope="row">10-9</th>
                    <td>S</td>
                    <td>Excelente</td>
                    </tr>
                  <tr>
                    <th class="table-primary" scope="row">8-7</th>
                    <td>A</td>
                    <td>Alto</td>
                    
                  </tr>
                  <tr>
                    <th class="table-warning" scope="row">6-5</th>
                    <td>B</td>
                    <td>Medio</td>
                    
                  </tr>
                  <tr>
                    <th class="table-danger" scope="row">4-0</th>
                    <td>C</td>
                    <td>Bajo</td>
                    
                  </tr>
                </tbody>
              </table>
        
        
        <button type="button" id="score-btn" onclick="backToQuiz()">Volver a intentarlo</button>
    </div>        
    </div>
</section>

<!----------------------------------footer--------->
<footer>
<section id="footer">
    <img src="wave2.png" class="footer-img" alt="onda">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-box">
                <a href="https://www.instagram.com/rempo.art"> <img src="logonuevo.png" alt="logo"> </a>
                <aside>
                <p> Emotion.IA es una compa??ia que busca tu bienestar emocional apoyada en las tecnolog??as digitales.</p>
            </aside>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>CONT??CTANOS</b></p>
                <p><i class="fa fa-map-marker"></i>  Bogot??, Colombia </p>
                <p><i class="fa fa-solid fa-phone"></i>  +57 310-271-9133</p>
                <p><i class="fa fa-solid fa-at"></i>contact@emotionia.com</p>
            </div>
            <div class="col-md-4 footer-box">
                <form>
                    <div class="mb-3">
                     <p> <label for="email-ejemplo">Correo electr??nico</label></p>
                      <input type="email" class="form-control" id="email-ejemplo" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Podr??s eliminar la susbcripci??n cuando desees</div>
                    </div>
                    <div class="mb-3">
                    <label>Fecha de cumplea??os</label>
                    <input type="date" id="start" name="fecha" min="1900-01-01" max="2022-05-01" required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Suscr??bete</button>
                  </form>           
            </div>
        </div>
        <hr>
        <p class="copyright" >Sitio web creado por Bryan Garcia M. Im??genes de: <a href="https://storyset.com/worker">Worker illustrations by Storyset</a> Logo por: <a href="https://www.instagram.com/rempo.art">@rempo.art</a></p>
    </div>
</section>
</footer>
<!-----------------------------------smooth scroll--------------------------------------->
<script src="smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script src="Java-design2.js"></script>
</body>
</html>