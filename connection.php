<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "manymoni";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo "";
}
else{
    die("connection fail because".mysqli_connect_error());
}
?>