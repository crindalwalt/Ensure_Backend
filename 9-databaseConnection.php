<?php
echo "<h1>Database connection</h1>";
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "ensure";
$connection = mysqli_connect($host,$username,$password,$database);
if($connection){
    echo "connection is successful with $database";
}else{
    echo "connection is failed with $database";
}

?>