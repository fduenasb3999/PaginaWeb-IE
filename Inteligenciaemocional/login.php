

<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "demo";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

    die("failed to connect");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(!empty($email) && !empty($password))
    {
        //read from databese
        $query = "select * from site_users where email = '$email' limit 1";
        $result = mysqli_query($con, $query);
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['email'] = $user_data['email'];
                      if(!empty($_POST['remember']))
                      {
                        $remember_checkbox=$_POST['remember'];
                        setcookie('email',$email,time()+3600*24*7);
                        setcookie('password',$password,time()+3600*27*7);
                      }
                      else
                      {
                        setcookie('email',$email,30);
                        setcookie('password',$password,30);
                      }

                    header("Location:test.php");
                    die;
                }
            }
        }
        echo "Por favor revisa tus credenciales";
    }else{
        echo "Por favor revisa tus credenciales";
    }
    }
    
    
    ?>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Emotion.ia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="custom2.css">

    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"

  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="

  crossorigin="anonymous"></script>

 

    
</head>

 

<body class="text-center">


<main class="form-signin">

  <form class="mt-5" id="registrationFrm" action="" method="POST">

    <h1 class="h3 mb-3 fw-normal text-white">Inicia sesión</h1>

      
    <div class="form-floating  mb-3">

      <input type="email" class="form-control" id="floatingEmail" placeholder="nombre@ejemplo.com" name="email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];};?>">

      <label for="floatingEmail">Correo electrónico</label>

    </div>

    
    <div class="form-floating ">

      <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];};?>">

      <label for="floatingPassword">Contraseña</label>

    </div>

        
  <div class="form-group>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remeber" placeholder="Remember" name="remember">
        <label class="form-check-label text-white" for="gridCheck1">
          Recuérdame
        </label>
      </div>
    </div>
  </div>
  
    
    <button class="w-100 btn btn-lg btn-warning" type="submit" id="registerSubmit">Iniciar Sesión</button>
   
  </form>
  <div class="form-group row">
    <div class="col">
    <form action="registro.php">
        <button class="btn btn-warning" type="submit" id="login">Crea una cuenta</button>
    </form>
    </div>
    <div class="col">
    <form action="index.html">
    <button class="btn btn-warning" type="submit" id="login">Regresar al home</button>
  </form>
    </div>
  </div>

</main>

<div>
<img src="logonuevo.png" width="100" height="100">
  </div>
</body>

</html>