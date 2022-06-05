<?php

if(isset($_POST['name'],$_POST['phone'],$_POST['email'],$_POST['password']))

{

    $errorsArray  = [];

    if(empty($_POST['name']))

    {

        $errorsArray[] = 'Se requiere un nombre de usuario';

    }

 

    if(empty($_POST['phone']))

    {

        $errorsArray[] = 'Se requiere el teléfono';

    }

    

    if(empty($_POST['email']))

    {

        $errorsArray[] = 'Se requiere el email';

    }

    

    if(empty($_POST['password']))

    {

        $errorsArray[] = 'Se requiere una contraseña';

    }

 

    if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL))

    {

        $errorsArray[] = "Formato no válido de email";

    }

 

    if(count($errorsArray) > 0)

    {

        $errors['error_count'] =  count($errorsArray);

        $errors['error_msg'] =  $errorsArray;

        echo json_encode($errors);

        exit();

    }

 

    $servername = "localhost";

    $username = "root";

    $password = "";

    $database = 'demo';

 

    try {

        $conn = new PDO("mysql:host=$servername;dbname=".$database, $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {

        

        echo json_encode(['error_msg' => $e->getMessage(), 'error_count' => 1]);

        exit();

    }

 

    $name = htmlspecialchars(trim($_POST['name']));

    $email = htmlspecialchars(trim($_POST['email']));

    $phone = htmlspecialchars(trim($_POST['phone']));

    $password = trim($_POST['password']);

 

   

    $sql = "insert into site_users (name, email, password, phone, created_at) values(:name,:email,:password,:phone,:created_at)";

    

    $prepare = $conn->prepare($sql);

    $params = [

        'name' => $name,

        'email' => $email,

        'password' => $password,

        'phone' => $phone,

        'created_at'=> date('Y-m-d H:i:s')

    ];

 

    try{

        $prepare->execute($params);

        echo json_encode(['success_msg' => 'El usuario ha sido registrado']);

        exit();

    }

    catch(Exception $e){

        echo json_encode(['error_msg' => $e->getMessage(),'error_count' => 1]);

        exit();

    }

    

}

 

echo json_encode(['error_msg' => 'Access Denied','error_count' => 1]);

exit();

?>