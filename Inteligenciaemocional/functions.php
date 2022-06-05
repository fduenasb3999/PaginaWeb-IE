<?php

function check_login($con)
{
    
    if(isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $query = "select * from site_users where email = '$email'";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirigir al login
    header("Location: login.php");
    die;
}