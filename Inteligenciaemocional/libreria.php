<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

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
        
    <div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Contactos de Emotion.ia</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="bg-warning">#</th>
                  <th scope="col" class="bg-warning">Nombre</th>
                  <th scope="col" class="bg-warning">Email</th>
                  <th scope="col" class="bg-warning">Teléfono</th>
                  <th scope="col" class="bg-warning">Fecha de ingreso</th>
                </tr>
              </thead>
              <tbody>
                <?php include 'retrieve-data.php'; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row" class="table-light"><?php echo $array[0];?></th>
                    <td class="table-light"><?php echo $array[1];?></td>
                    <td class="table-light"><?php echo $array[2];?></td>
                    <td class="table-light"><?php echo $array[4];?></td>
                    <td class="table-light"><?php echo $array[5];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>                     
        
    </div>
</div>
    <img src="wave1.png" class="bottom-img" alt="onda">
</section>

</body>
</html>