<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++
//     For Loop                        
//+++++++++++++++++++++++++++++++++++++++++++++++++


/**
 * For loop in php
 * 
 */

$array = array("Shahzad", "Muhtshim", "Zaid", "Ali Imran", "Bazaid", "Asad", "Adil Farooq");

// for ($i = 0; $i < count($array); $i++) {
//    echo $array[$i];
//    echo '<br><br>';
// }


/**
 * While loop in php
 * 
 */
echo '<ol type="i">';
$i = 0;
// while ($i < count($array)) {
//    echo "<li>$array[$i]</li>";

//    $i++;
// }



/**
 * Do While loop in php
 * 
 */

//  do{
//    echo "<li>$array[$i]</li>";
//    $i++;
//  }while($i>count($array));

 echo "</ol>";
$array2D = array(
   'name' => "Shahzad Farooq",
   'age' => 19,
   'study' => "BSSE 4th-3M",
   'skills' => 'laravel',
);
foreach($array2D as $key=>$item){
   echo $key.': '.$item . '<br>';
}