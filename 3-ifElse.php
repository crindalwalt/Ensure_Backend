<?php


//+++++++++++++++++++++++++++++++++++++++++++++++++
//      If Else Condition                          
//+++++++++++++++++++++++++++++++++++++++++++++++++
/**? Topics
 * 
 *  Syntax
 *  else if
 *  nested if else
 * 
 */


echo "<center><h1>Hello from the If else page</h1></center>";



// $age = 75;

// if($age < 40){
//     echo "age is less then 40";
// }else if($age < 50 and $age > 40){
//     echo "age is between 40 - 50 years";
// }else if($age > 50 and $age < 90){
//     echo "age is between 50 - 90 years";
// }else{
//     echo "age is greater then 40";
// }


// Program to prompt user if he can drink alcohol or not
$age = 7;


if($age < 18 and $age > 0){
    echo '<h3 style="color:red;">==>  You cannot drink alcohol</h3>you are underage';
    if($age == 7){
        echo "you are 7 years old";
    }
}else if($age >= 18 and $age <=25){
    echo '<h3 style="color:red;">==>  You cannot drink alcohol</h3>you are above 18 but wait till 25';
}
else{
    echo "invalid choice";
}