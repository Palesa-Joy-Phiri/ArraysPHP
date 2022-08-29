<?php 

/* Task 3

Just like you made one for yourself (in Task2), make arrays for 2 other people, they don't have to be real, you can make up the values.
Create an empty array called $class.
Add your 3 people to the class variable.
Display the height of the first person, the age of the second, and the shoe size of the third!
Add a new person to the front of the class.
Display the height, age, and shoe size of the new person.*/


$Paballo = ["height=>156", "age=>17", "shoe=>6"];

echo "Paballo: "."<br>";
echo $Paballo[0]. "<br>";
echo $Paballo[1]. "<br>";
echo $Paballo[2]."<br>"."<br>";


$Alex = ["height=>163", "age=>59", "shoe=>10"];

echo "Alex: "."<br>";
echo $Alex[0]. "<br>";
echo $Alex[1]. "<br>";
echo $Alex[2]."<br>"."<br>";

$Lee = ["height=>113", "age=>9", "shoe=>2"];

echo "Lee: "."<br>";
echo $Lee[0]. "<br>";
echo $Lee[1]. "<br>";
echo $Lee[2]."<br>"."<br>";

$class = ["Paballo", "Alex", "Lee"];

echo $Paballo[0]. "<br>";
echo $Alex[1]. "<br>";
echo $Lee[2]."<br>";

array_push ($class, "Vuvu");


?>
