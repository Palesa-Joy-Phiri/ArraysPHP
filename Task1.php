<?php

/*Task 1
1. Make an array of your five favourite fruits and vegetables. 
2. Then display the first and last ones.
3. Remove one fruit from the beginning of the array and add one to the end.
4. Display the first and last elements again.
5. Replace the 3rd item of the array with 3 others.
6. Sort the array alphabetically.
7. Display the whole array as a comma-separated string.*/

echo "Task 1:"."<br>"."<br>";


$favfruits = ["Watermelon,", "Mango,", "Banana,", "Orange,", "Kiwi"];
    echo "1. My favourite fruits are: ";

    echo $favfruits [0]." ";
    echo $favfruits [1]." ";
    echo $favfruits [2]." ";
    echo $favfruits [3]." ";
    echo $favfruits [4]." ". "<br>"."<br>";

echo "2. Display 1st and last fruits: ";
    echo $favfruits[0]. " ";
    echo end($favfruits)."<br>"."<br>";

echo "3. Remove element from the front and add one fruit to the end: ";
    favfruits_push ($favfruits, "Blueberry ");
    print_r($favfruits);

echo "4. Display 1st and last again: ";
    echo $favfruits[0]. " ";
    echo end($favfruits)."<br>"."<br>";

echo "5. Replace 3rd item and add 3 new: ";
    $addedfruits = ["Cherry,", "Apple,", "Strawberries,"];
    array_splice = ($favfruits, 2, 3, $addedfruits);
    print_r($favfruits);

echo "6. Alphabetical order: ";
    sort ($favfruits);

    echo $favfruits [0]." ";
    echo $favfruits [1]." ";
    echo $favfruits [2]." ";
    echo $favfruits [3]." ";
    echo $favfruits [4]." ";
    echo $favfruits [5]." ";
    echo $favfruits [6]." ";
    echo $favfruits [7]." ". "<br>"."<br>";

echo "7. Comma separated array: "
    echo $favfruits;









?>