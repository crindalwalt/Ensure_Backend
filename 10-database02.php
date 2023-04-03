<?php
echo "<h1>Database connection</h1>";
$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "ensure";
$connection = mysqli_connect($host, $username, $password, $database);
if ($connection) {
    echo "connection is successful with $database";
} else {
    echo "connection is failed with $database";
}


$query = "SELECT * FROM `students`";
$run = mysqli_query($connection, $query);
$row = mysqli_num_rows($run);

// $result = ;
// echo var_dump($result);
echo "<hr>";
// foreach($result as $item){
//     echo var_dump($item);
//     echo "<br>";
// }

while ($envy = mysqli_fetch_assoc($run)) {
    print_r($envy['id']);
    echo '<br><br>';
    print_r($envy['name']);
    echo '<br><br>';
    print_r($envy['roll_no']);
    echo "<br>";
}
echo '<br><br>';

echo $row;


?>





<!-- INSERT INTO `students` (`id`, `name`, `roll_no`, `cnic`) VALUES ('1', 'Shahzad Farooq', 'F211068', '312021'); -->