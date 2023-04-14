<?php
if (isset($_GET['id'])) {
    require_once "backend/database.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM `todo_items` WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($result);
    // echo "no of results = $rows";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD app</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "partials/header.php" ?>

    <section id="app" class="bg-grad-1">
        <div class="container py-5  d-flex justify-content-center align-items-center flex-column w-100">
            <?php


            while ($entry = mysqli_fetch_assoc($result)) {
                echo '<h1 class="mb-4">' . $entry['title'] . '</h1><p class="lead">' . $entry['description'] . '</p>';
            }


            ?>
        </div>
    </section>


    <?php include "partials/footer.php" ?>

    <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>