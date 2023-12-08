<?php
echo "////Q1////<br>";

for ($i = 1; $i < 11; $i++) {
    echo ($i == 1) ? $i : "-$i";
}


echo "<br>";
echo "//<br>";
echo "////Q2////<br>";
$numbers = [1, 1, 1, 2, 2, 3, 6, 7, 7, 4, 5, 5];
$NewArray = array_unique($numbers);
sort($NewArray);
echo "[";
foreach ($NewArray as $key => $value) {
    if ($value == max($NewArray)) {
        echo "$value]";
    } else {
        echo "$value,";
    }
}

echo "<br>";
echo "//<br>";
echo "////Q3////<br>";
$word = "eraasoft";
$count = 0;
foreach (mb_str_split($word) as $character) {
    $count += ($character == "r") ? 1 : 0;
}
echo "$count";

echo "<br>";
echo "//<br>";
echo "////Q4////<br>";
for ($i = 1; $i < 51; $i++) {

    if ($i % 5 == 0 && $i % 3 == 0) {
        echo "FizzBuzz<br>";

    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fuzz,";
    } else {
        echo "$i,";
    }
}

echo "<br>";
echo "//<br>";
echo "////Q5////<br>";
$sum = 0;
for ($i = 1; $i < 31; $i++) {
    $sum += $i;
}
echo " The sum of the numbers 0 to 30 is $sum";
echo "<br>";
echo "//<br>";
echo "////Q6////<br>";

function Largest($Array)
{
    $Max = $Array[0];
    foreach ($Array as $key => $value) {
        if ($value > $Max) {
            $Max = $value;
        }
    }
    return $Max;
}
$numbers = [5, 15, -10, 100, 250, 0, 1];
echo "The Max number is :  " . Largest($numbers);
echo "<br>";
echo "//<br>";
echo "////Q7////<br>";
function Smallest($Array)
{
    $Smallest = $Array[0];
    foreach ($Array as $key => $value) {
        if ($value < $Smallest) {
            $Smallest = $value;
        }
    }
    return $Smallest;
}
$numbers = [5, 15, -10, 100, 250, 0, 1];
echo "The Max number is :  " . Smallest($numbers);

echo "<br>";
echo "//<br>";
echo "////Q8////<br>";
function Factorial($number)
{
    $factorial = $number;
    for ($i = 1; $i < $number; $i++) {
        $factorial = $factorial * $i;

    }
    return $factorial;
}

echo "The factorial of the number is " . Factorial(4);

echo "<br>";
echo "//<br>";
echo "////Q9////<br>";
$num = 1;

while ($num < 16) {
    if ($num % 2 == 0) {
        $num++;
    } else {
        if ($num == 1) {
            echo "[$num,";
        } elseif ($num == 15) {
            echo "$num]";
        } else {
            echo "$num,";
        }
        $num++;
    }
}



echo "<br>";
echo "//<br>";
echo "////Q10////<br>";
$num = 1;
while ($num < 16) {
    if ($num % 2 == 1) {
        $num++;
    } else {
        if ($num == 2) {
            echo "[$num,";
        } elseif ($num == 14) {

            echo "$num]";
        } else {
            echo "$num,";
        }
        $num++;
    }
}

echo "<br>";
echo "//<br>";
echo "////Q11////<br>";
$person = array("name" => "John", "age" => 30, "city" => "New York");
foreach ($person as $key => $value) {
    echo "The Key is: $key & The value is : $value . <br>";
}

echo "<br>";
echo "//<br>";
echo "////Q12////<br>";
$sales = array("Jan" => 100, "Feb" => 200, "Mar" => 150);
$Sum = 0;
foreach ($sales as $key => $value) {
    $Sum += $value;
}
echo " $Sum <br>";

echo "<br>";
echo "//<br>";
echo "////Q13////<br>";
for ($i = 0; $i < 13; $i++) {

    echo "$i*8=" . $i * 8 . "<br>";
}


echo "<br>";
echo "//<br>";
echo "////Q14////<br>";
$students = array(
    array("name" => "John", "age" => 20, "grade" => "A"),
    array("name" => "Mary", "age" => 22, "grade" => "B"),
    array("name" => "Tom", "age" => 18, "grade" => "A")
);

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value, ";
    }
    echo "<br>";
}


echo "<br>";
echo "//<br>";
echo "////Q15////<br>";
$num = 1;

do {
    if ($num % 3 == 0) {
        echo $num . "-";
    }
    $num++;
} while ($num <= 100);

?>


///Search Task
//authentication and authorization
<!-- Authentication is the process of verifying the identity of a user, system, or application. Its aim is to ensure that the
user or system requesting identity verification is the person to whom that identity belongs. After the authentication
process, authorization, as a subsequent step, determines which parts the user can access and what actions they are
permitted to take. Each of them employs specific methods; authentication relies on techniques such as passwords,
biometrics, and cryptography, while authorization is implemented through access control lists, role-based access
control, and permissions -->