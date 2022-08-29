<?php

/* Task 2

Make an associative array that stores your height, age, and shoe size. 
Display the elements of the array.
You've hit a growth spurt! Add 10cm to the height and display the new value.
Now you found the fountain of youth! Become two years younger and display the new age.*/
 
$Palesa = ["height=>170", "age=>25", "shoe=>7"];

echo $Palesa[0]. "<br>";
echo $Palesa[1]. "<br>";
echo $Palesa[2]."<br>";

$newheight= $Palesa[height] + 10;
    echo $newheight;

$newage= $Palesa[age] - 2;
    echo $newage;


?>