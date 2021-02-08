<?php

$servernamedb="localhost";
$usernamedb="root";
$passworddb="";
$databasedb="cedhosting";
$con=mysqli_connect($servernamedb,$usernamedb,$passworddb,$databasedb);

if(mysqli_connect_errno())
{
    echo "failed to connect to mysql:" . mysqli_connect_error();
}

?>