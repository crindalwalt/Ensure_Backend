<?php


//+++++++++++++++++++++++++++++++++++++++++++++++++
//      Switch Case Condition                          
//+++++++++++++++++++++++++++++++++++++++++++++++++
echo "Switch case in php";
echo "<br><br>";

$age = 20;

switch ($age) {
    case 17:
        echo "age is 17 years old";
        break;
    case 18:
        echo "age is 18 years old";
        break;
    case 19:
        echo "age is 19 years old";
        break;
    default:
        echo "age is not 17,18,19";
        break;
}
