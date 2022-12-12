<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'lab_8';


$con= mysqli_connect($server,$username,$password,$db);

if($con)
{
    echo "Connection Successful";
}
else{
    echo "No Connection";
    die("no connections:".mysqli_connect_error());
}


?>