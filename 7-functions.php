<?php
//+++++++++++++++++++++++++++++++++++++++++++++++++
//     Functions                       
//+++++++++++++++++++++++++++++++++++++++++++++++++


/**
 * Functions in php
 * 
 */

// echo "function is working";

// function greet($fname,$lname)
// {
//     echo "hello $fname $lname";
// }


$name = "Shahzad Farooq";
$first_name = "Adil";
$last_name = "Farooq";
// greet($first_name,$last_name);


$mul1 = 2;
$mul2 = 2;
$mul3 = 2;
$mul4 = 2;

function mul($mul1,$mul2,$mul3,$mul4){
    return $mul1*$mul2*$mul3*$mul4;
}

echo mul($mul1,$mul2,$mul3,$mul4);