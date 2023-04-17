<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        require_once "database.php";
        $id = $_POST['todo_id'];
        echo "<h1>$id</h1>";
        
        $sql = "DELETE FROM `todo_items` WHERE `todo_items`.`id` = $id";
        $result = mysqli_query($connection,$sql);
        if($result){
            header("Location:../index.php?delete=true");
        }else{
            header("Location:../index.php?delete=false");
            
        }
    }














?>