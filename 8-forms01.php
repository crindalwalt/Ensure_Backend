<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>

<body>
    <h1>Form data</h1>
    <b><?php echo $_POST['fullname']   ?></b> <br>
    <b><?php echo $_POST['email']   ?></b><br>
    <b><?php

        if (isset($_POST["age"])) {
            if ($_POST['age'] > 17) {
                echo "you are eligible";
            } else {
                echo "you are underage";
            }
        }else{
            echo "age not given";
        }
        ?></b><br>

<b><?php

if (isset($_POST["pass"])) {
    if ($_POST['pass'] == $_POST['cpass'] ) {
        echo "<p style='color:green;'>Password Matches</p>";
    } else {
        echo "<p style='color:red;'>Password does not Matches</p>";
    }
}else{
    echo "password not given";
}
?></b><br>

    <hr>
    <h1>Fill out the form</h1>
    <form action="8-forms01.php" method="POST">
        Name:<input type="text" name="fullname"><br><br>
        Age:<input type="number" name="age"><br><br>
        Email:<input type="email" name="email"><br><br>
        Password:<input type="password" name="pass"><br><br>
        confirm Password:<input type="password" name="cpass"><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>
</body>

</html>