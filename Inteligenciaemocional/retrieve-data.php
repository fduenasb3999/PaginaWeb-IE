<?php

include 'connection.php';

$query="select * from site_users limit 50"; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);

?>