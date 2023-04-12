<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // requiring database connection
    require_once("database.php");

    // fetching details from request
    $title = $_POST['title'];
    $description = $_POST['desc'];

    // test fetched details
    echo "<h1>$title</h1><p>$description</p>";


    if (empty($title) or empty($description)) {
        echo "fill out all fields";
    } else {
        // saving data into database
        // $query = "INSERT INTO `notes` ( `title`, `description`,) VALUES ( '$title', '$description', );";


        $query = "INSERT INTO `todo_items` ( `title`, `description`) VALUES ( '$title', '$description');";
        $result = mysqli_query($connection,$query);





        // echo $query;
        // $query_run = mysqli_query($connection,$query);
        // echo var_dump($query_run);
        // if(die($query_run)){
        //     echo "todo could not saved";
        // }else{
        //     echo "todo is saved successfully";


        // }


        // if ($connection->query($query) === TRUE) {
        //     echo "New record created successfully";
        //   } else {
        //     echo "Error: " . $sql . "<br>" . $connection->error;
        //   }

        if ($result) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
    }
} else {
    echo "method is GET";
}
