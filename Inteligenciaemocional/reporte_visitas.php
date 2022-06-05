<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);


$visitas = file_get_contents("contador.txt");
?>

<html lang="en">

<!DOCTYPE html>
<html lang="en">
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
                <a class="nav-link" href="logout.php">CERRAR SESIÓN</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</section> 
</header>
<section id="banner">   
<div class="container">
    <div class="row">                  
        
    </div>
</div>
    <img src="wave1.png" class="bottom-img" alt="onda">
</section>
<section id="mensaje">
<div class="container">
    <h1 class="title text-center">Queremos contarte algo</h1>
   
    <div class="row">
        <div class="col-md-6 precios">
        <p>La luz habita en ti...✨⁣⁣⁣⁣⁣</p>
⁣⁣⁣⁣⁣        <p>La atención es el poder de la manifestación por eso debemos elegir conscientemente nuestro enfoque, porque será lo que estaremos alimentando.🌠</p>
⁣⁣⁣⁣⁣        <p>Es normal. Todos le tenemos miedo a lo desconocido. Pero es allí donde se encuentra el crecimiento.🌠⁣⁣⁣⁣⁣⁣⁣⁣⁣⁣</p>
⁣⁣⁣⁣⁣        <p>La transformación comienza con nuestro cambio interior.💛⁣⁣⁣⁣⁣ </p>
        <p>Mira tu interior y acepta la luz infinita que habita dentro de ti.⁣⁣🧘🏽‍♂️💫🧘🏼‍♀️</p>
        <p>Tal vez es en tu práctica espiritual, en la que llegas hasta cierto nivel de profundidad y luego caes en un hábito dañino para evitar ver demasiado de cerca a tu luz. </p>          
        <p class="text-primary">No olvides este mensaje, eres el visitante número <?php printf($visitas); ?> </p>
        </div>
        <div class="col-md-1 ">
        </div>
        <div class="col-md-5">
            <img src="mio.gif" width="500" height="500">
        </div>
    </div>
</div>
</section>
</body>
</html>