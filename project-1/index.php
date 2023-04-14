<?php
$todoAdded = false;
$todoNotAdded = false;
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    $todoAdded  = true;
}
if (isset($_GET['status']) && $_GET['status'] == 'failed') {
    $todoNotAdded  = true;
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

    <?php
    include "partials/header.php"
    ?>

    <?php
    if ($todoAdded) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success</strong> Your TODO item is added successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if ($todoNotAdded) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!!</strong> Your TODO item could not be added
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }

    ?>
    <section id="app" class="bg-grad-1">
        <div class="container py-5  d-flex justify-content-center align-items-center flex-column w-100">
            <h1 class="mb-4">Take control of what to do by <span class="text-success">iTODO</span> </h1>
            <form action="backend/add.php" method="POST">
                <div class="w-100 bg-dim p-4 rounded-3 shadow-md">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-md btn-primary d-flex justify-content-center align-items-center">
                            <img src="assets/add.svg" alt="" class="add_icon ">
                            <span>Add a TODO</span>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </section>


    <section id="show_todo">
        <div class="container my-5">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Desc</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    require_once "backend/database.php";
                    $query = "SELECT * FROM `todo_items`";
                    $result = mysqli_query($connection, $query);
                    while ($entry = mysqli_fetch_assoc($result)) {

                        echo '<tr>
                        <th scope="row">' . $entry['id'] . '</th>
                        <td>' . $entry['title'] . '</td>
                        <td>' . $entry['description'] . '</td>
                        <td>
                            <form action="">
                                <a class="btn btn-sm btn-outline-warning" href="show.php?id='. $entry['id'].'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <button class="btn btn-sm btn-outline-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>';
                    }




                    ?>

                </tbody>
            </table>
        </div>
    </section>



    <?php include "partials/footer.php" ?>

    <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>