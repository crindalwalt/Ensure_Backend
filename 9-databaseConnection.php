<?php
echo "<h1>Database connection</h1>";
$host = "127.0.0.1";
$username = "root";
$password = "";
$connection = mysqli_connect($host,$username,$password);
if($connection){
    echo "connection is successful";
}else{
    echo "connection is failed";
}

?>