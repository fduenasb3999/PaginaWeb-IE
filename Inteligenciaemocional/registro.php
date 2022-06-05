<?php
# Incluir el contador de visitas
include_once "contar_visita.php";
?> 

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emotion.ia - Registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="custom.css">

    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"

  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="

  crossorigin="anonymous"></script>

 

    <script>

        $(document).ready(function(){

            $("#registerSubmit").click(function(e){

                e.preventDefault();

                let emptyInputCount=0;

                

                $("#registrationFrm input").each(function(){

                    var input = $(this);

                    if(input.val() == ''){

                        input.css('border-color','red');

                        emptyInputCount = 1;

                    }

                    else{

                        input.css('border-color','#ced4da');

                    }

                });

                

    

                if(emptyInputCount >= 0){

                    let getName = $("#floatingName").val();

                    let getPhone = $("#floatingPhone").val();

                    let getEmail = $("#floatingEmail").val();

                    let getPassword = $("#floatingPassword").val();

    

                    postObj = {

                        name: getName,

                        phone: getPhone,

                        email: getEmail,

                        password: getPassword,

                    }

                    

                    $.ajax({

                        type: 'POST',

                        url:'form_ajax.php',

                        data:postObj,

                        success: function(data){

                            //console.log(data);

                            parseJson = JSON.parse(data);

    

                            if(parseJson.success_msg)

                            {

                                $("#response").html('<div class="alert alert-success">'+parseJson.success_msg+'</div>');

                            }

                            else

                            {

                                if(parseJson.error_count == 1)

                                {

                                $("#response").html('<div class="alert alert-danger">'+parseJson.error_msg+'</div>');

                                }

                                else

                                {

                                    let msg='';

                                    for(i=0;i<parseJson.error_count;i++)

                                    {

                                    msg +='<div class="alert alert-danger">'+parseJson.error_msg[i]+'</div>';

                                    }

    

                                    $("#response").html(msg);

                                }

                            }

                        }

                    })

                }

            });

        });

    </script>

</head>

 

<body class="text-center">

<main class="form-signin">

  <form class="mt-5" id="registrationFrm" action="" method="POST">

    <h1 class="h3 mb-3 fw-normal text-white">Regístrate</h1>

    <div id="response"></div>

    <div class="form-floating  mb-3">

      <input type="text" class="form-control" id="floatingName" placeholder="Name" name="name">

      <label for="floatingName">Nombre</label>

    </div>

    <div class="form-floating  mb-3">

      <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email">

      <label for="floatingEmail">Correo electrónico</label>

    </div>

    <div class="form-floating  mb-3">

      <input type="text" class="form-control" id="floatingPhone" placeholder="Phone" name="Phone">

      <label for="floatingPhone">Teléfono</label>

    </div>

    <div class="form-floating">

      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">

      <label for="floatingPassword">Contraseña</label>

    </div>

 

    <button class="w-100 btn btn-lg btn-warning" type="submit" id="registerSubmit">Regístrate</button>

    

  </form>

  
  <div class="form-group row">
    <div class="col">
    <form action="login.php">
        <button class="btn btn-warning" type="submit" id="login">Tengo una cuenta</button>
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