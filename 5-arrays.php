<?php


//+++++++++++++++++++++++++++++++++++++++++++++++++
//     Arrays                        
//+++++++++++++++++++++++++++++++++++++++++++++++++


/**
 * array is a datatype which can be stored in a variable
 * 
 */

$friends = array("Shahzad", "Muhtshim", "Zaid", "Bazaid", "Ali Imran");
echo var_dump($friends) ;
echo '<br><br>';


// echo $friends[2];
// echo '<br><br>';

// echo $friends[3];

// $friends.array_push(["Danial"]);


// array_push($friends,"Danial");
// echo  var_dump($friends);
// echo '<br><br>';
// array_pop($friends);
// echo  var_dump($friends);
// echo '<br><br>';
// array_pop($friends);
// echo  var_dump($friends);
// echo var_dump($friends);


$friends2D = array(
    "school" => "Zaid",
    "college" => "Muhtshim",
    "uni" => 12
);

echo $friends2D["college"];