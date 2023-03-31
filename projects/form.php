<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // default variables
    $password_mismatch = false;
    $account_creation = false;
    $emptyInput = false;


    // fetching form details
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // check for empty inputs
    // $emptyResult = empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['confirm_password']);
    // echo var_dump($emptyResult);
    // if ($emptyResult) {
    //     $emptyInput = true;
    // } else {

    // }
    if (empty($_POST['fname']) or empty($_POST['lname']) or empty($_POST['email']) or empty($_POST['password']) or empty($_POST['confirm_password'])) {
        // echo "please fill out all fields";
        $emptyInput = true;
    } else {



        // validating user password
        if ($password === $confirm_password) {
            $account_creation = true;
        } else {
            $password_mismatch = true;
        }
    }
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Project</title>

    <!-- Bootstrap Css Cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Google Fonts Cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">



    <style>

        * {
            font-family: 'Alkatra', cursive;
        }

        .bg-cont {
            background-color: #efefef;
        }
        .bg-subtle{
            background-color: var(--bs-gray-400);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    if ($password_mismatch) {
        echo '    <div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning</strong> Password Does not matched Try again
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($account_creation) {
        echo '    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong>Account has been created
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($emptyInput) {
        echo '    <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning</strong> please fill out all fields
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>




    <div class="container rounded-5 shadow-lg bg-subtle p-4 my-5 w-50">
        <h1>Fill out the Form</h1>
        <hr>
        <form action="form.php" method="POST">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="John">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Doe">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <label for="pass1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass1" name="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-lg btn-success" value="Signup Now">
            </div>
        </form>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>