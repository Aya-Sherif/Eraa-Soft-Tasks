<?php

function ThreeDigits($num1, $num2, $num3)
{
    $Answer = ($num1 + $num2) * $num3;
    return $Answer;
}
echo "The Answer is :" . ThreeDigits(5, 2, 2) . "<br>";


///Q2
function Size($hight)
{
    $length = 5;
    $width = 10;

    if ($hight > 0) {
        $size = $hight * $width * $hight;
        return $size;
    } else {
        return "Invalide Number ";
    }

}

echo "The Size is : " . Size(5) . "<br>";
echo "The Size is : " . Size(-5) . "<br>";


////Q3
function HoursToSeconds($hours)
{
    $Seconds = $hours * 60 * 60;
    return $Seconds;
}
echo "The Seconds is :" . HoursToSeconds(1) . "<br>";

////Q4

function TrianngleArea($base, $hight)
{

    return 0.5 * $hight * $base;
}
$base = 5;
$hight = 10;
echo "The Hight of the Triangle is $hight and the base is $base.The Area of the Triangle is :" . TrianngleArea($base, $hight) . "<br>";


/////Q5
function AgeInDays($year)
{
    return $year * 12 * 30;

}
$year = 5;
echo "Your age in days is :" . AgeInDays($year) . "<br>";

///Q6,7,8,9,10,11
$Sentense = "EraaSoft Learn by practice";
//6
echo "The length of the sentence is :" . strlen($Sentense) . "<br>";
//7
echo "The length of the sentence without spaces is :" . strlen(str_replace(" ", "", $Sentense)) . "<br>";

//8
echo "The number of words is :" . str_word_count($Sentense) . "<br>";
//9
echo "Contain By ? " . (stripos($Sentense, 'by') !== false ? 'Yes' : 'No') . "<br>";
//10
echo strstr($Sentense, ' ', true) . "<br>";
//11
echo "Sentense without 'by' : " . str_replace(' by', '', $Sentense) . "<br>";
echo "String without spaces and 'by': " . str_replace([' ', 'by'], '', $Sentense) . "<br>";



///Q12,13,14

$string_one = "Eraa";
$string_two = "Soft";

//12
$Full_String = $string_one . $string_two;
echo "The Full String is :" . $Full_String . "<br>";
//13
if ($Full_String == "EraaSoft") {
    echo "The Full_String is equal to 'EraaSoft'.<br>";
} else {
    echo "The Full_String isn't equal to 'EraaSoft'. <br>";
}
//14
echo rtrim(preg_replace('/(.{2})/', '$1/', $Full_String), '/') . "<br>";

//َQ15

function OddOrEven($num)
{
    if ($num % 2 == 0) {
        echo $num . " Is Even number.<br>";
    } else {
        echo $num . " Is Odd number.<br>";
    }
}

OddOrEven(1);
OddOrEven(2);

//Q16
function LengthOddOrEven($String)
{
    if (strlen($String) % 2 == 0) {
        echo "The Length of the '$String', Is Even number.<br>";
    } else {
        echo "The Length of the '$String', Is Odd number.<br>";
    }
}
LengthOddOrEven('Eraa');
LengthOddOrEven('Eraa Soft');

//Q17
$description = "no pain , no gain ";

if (str_contains($description, "gain") || str_contains($description, "pain")) {
    echo "success word<br>";
} else {
    echo "wrong word <br>";
}

//Q18
$BoolNum = 0;
echo ($BoolNum == 1) ? "0" : "1" . "<br>";

//Q19
function CheckWord($word)
{
    if (substr($word, -1) == 's') {
        echo "The word '$word' is plural.<br>";
    } else {
        echo "The word '$word' is singular.<br>";
    }
}
CheckWord("EraaSoft");
//Q20

function Calculator($num1, $num2, $operation)
{
    if ($operation == "+") {
        $result = $num1 + $num2;
        echo "Result is: $result <br>";
    } elseif ($operation == "-") {
        $result = $num1 - $num2;
        echo "Result is: $result <br>";
    } elseif ($operation == "*") {
        $result = $num1 * $num2;
        echo "Result is : $result <br>";
    } elseif ($operation == "/") {
        // Check for division by zero
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Result is : $result <br>";
        } else {
            echo "Cannot divide by zero. <br>";
        }
    } elseif ($operation == "power") {
        $result = pow($num1, $num2);
        echo "Result is: $result <br>";
    } elseif ($operation == "%") {
        // Check for modulus by zero
        if ($num2 != 0) {
            $result = $num1 % $num2;
            echo "Result is: $result<br>";
        } else {
            echo "Cannot perform modulus by zero.<br>";
        }
    } else {
        echo "Invalid operation. Please choose a valid operation.<br>";
    }
}
Calculator(5, 5, "+");
Calculator(5, 5, "-");
Calculator(5, 5, "*");
Calculator(5, 5, "/");
Calculator(5, 0, "/");
Calculator(5, 5, "power");
Calculator(5, 5, "%");
Calculator(5, 0, "%");
