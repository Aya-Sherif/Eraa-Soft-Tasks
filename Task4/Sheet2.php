<?php   
//Q1 

$Array = [2, 4, 6, 8, 10];
$Sum = array_sum($Array);
$count = count($Array);
$average = $Sum / $count;

echo "Average == $average <br>";

echo "//<br>";
echo "//<br>";
echo "////Q2////<br>";


$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$rows = 2;
$columns = 5;
$array2 = [];
$counter = 1;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {

        $index = $i * $columns + $j;
        if ($index < count($array1)) {
            $array2[$i][$j] = $counter;
            $counter++;
        } else {
            $array2[$i][$j] = 0;
        }
    }
}

echo "2D Array:<br>";
foreach ($array2 as $row) {
    foreach ($row as $num) {
        echo $num . " ";
    }
    echo "<br>";
}
//another Solution

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array2 = array_chunk($array1, 5);


echo "2D Array:<br>";
foreach ($array2 as $row) {
    foreach ($row as $num) {
        echo $num . " ";
    }
    echo "<br>";
}

echo "//<br>";
echo "//<br>";
echo "////Q3////<br>";

//Q3
$array = [1, 10, 5, 2, 11];
$largest = max($array);
$smallest = min($array);

echo "Largest number is: $largest<br>";
echo "Smallest number is: $smallest<br>"; 

echo "//<br>";
echo "//<br>";
echo "////Q4////<br>";

//Q4

$array = [1, 10, 5, 2, 11];
$x = 3;
$smaller = 0;
$greater = 0;

foreach ($array as $num) {
    if ($num < $x) {
        $smaller++;
    } elseif ($num > $x) {
        $greater++;
    }
}

echo "Numbers Smaller than ($x) = $smaller<br>";
echo "Numbers Greater than ($x) = $greater<br>";


echo "//<br>";
echo "//<br>";
echo "////Q5////<br>";

//Q5
function capitalizeNames($array) {
    return array_map('ucfirst', $array);  //ucfirst is a built-in function that stands for "uppercase first." This function is used to capitalize the first character of a string
}

$names = ["eraasoft", "backend", "group313"];
$result = capitalizeNames($names);
print_r($result);

echo "//<br>";
echo "//<br>";
echo "////Q6////<br>";

//Q6
$nums = [0, 1, 0, 3, 12];

$nonZeroIndex = 0;

// Move non-zero values to the front of the array
foreach ($nums as $num) {
    if ($num !== 0) {
        $nums[$nonZeroIndex] = $num;
        $nonZeroIndex++;
    }
}

// Fill the rest of the array with 0
for ($i = $nonZeroIndex; $i < count($nums); $i++) {
    $nums[$i] = 0;
}

echo "nums =[";
foreach ($nums as $index => $value) {
    echo $value;
    if ($index < count($nums) - 1) {
        echo ", ";
    }
}
echo "] <br>"; 


echo "//<br>";
echo "//<br>";
echo "////Q7////<br>";

//Q7

function findBobIndex($array) {
    $index = array_search("Bob", $array);
    return $index !== false ? $index : -1;
}

$names1 = ["Alice", "Bob", "Charlie", "Dave"];
$index1 = findBobIndex($names1);
$names2 = ["Alice", "Charlie", "Dave"];
$index2 = findBobIndex($names2);


echo $index1."<br>";
echo $index2."<br>";


echo "//<br>";
echo "//<br>";
echo "////Q8////<br>";

//Q8
function findSecondLargest($numbers) {
    $max = $numbers[0];
    $secondMax = null;

    foreach ($numbers as $num) {
        if ($num > $max) {
            $secondMax = $max;
            $max = $num;
        } elseif ($num > $secondMax && $num < $max) {
            $secondMax = $num;
        }
    }
    return $secondMax;
}

$numbers = [11, 55, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$secondLargest = findSecondLargest($numbers);

echo "Second Largest Number: " . $secondLargest."<br>";

echo "//<br>";
echo "//<br>";
echo "////Q9////<br>";

//Q9
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function checkNumberCharacteristics($numbers, $x) {
    if (in_array($x, $numbers)) {
        echo "Found, ";
        echo ($x >= 0) ? "Positive, " : "Negative, ";
        echo "Digits: " . strlen(abs($x)) . ", ";
        echo isPrime(abs($x)) ? "Prime, " : "Not Prime, ";
        echo ($x % 2 === 0) ? "Even, " : "Odd, ";
        echo ($x == strrev($x)) ? "Yes 🡺 read from right as left" : "No 🡺 not read from right as left";
    } else {
        echo "Not Found";
    }
}

// Example usage:
$numbers = [11, 55, 24, 43, 44, 545, 6, 777, 810, 94, 140];
$x = 545;

checkNumberCharacteristics($numbers, $x);



?>
