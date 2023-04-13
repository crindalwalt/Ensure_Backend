<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "todo";

$connection = mysqli_connect($host,$username,$password,$database);
if($connection){
    // echo "connection is successfull";
}else{
    echo "connection is failed";
}



?>