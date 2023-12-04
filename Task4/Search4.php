<?php 
///////////////////////////////////////////
////////Array Functions:///////////////////
///////////////////////////////////////////
//1) array_merge: Combines two or more arrays into a single array.
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$result = array_merge($arr1, $arr2);
print_r($result);


//2) array_push: Pushes one or more elements onto the end of an array.
$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr);

//3)array_pop: Pops the element off the end of an array.
$arr = [1, 2, 3];
$removedElement = array_pop($arr);
print_r($arr);

//4)array_flip: Exchanges all keys with their associated values in an array.
$arr = ["a" => 1, "b" => 2, "c" => 3];
$flipped = array_flip($arr);
print_r($flipped);

//5)array_key_exists: Checks if a specific key exists in an array.
$arr = ["name" => "John", "age" => 25];
if (array_key_exists("name", $arr)) {
    echo "Key 'name' exists!";
}
//6)array_slice: Extracts a portion of an array.
$arr = [1, 2, 3, 4, 5];
$subset = array_slice($arr, 2, 2);
print_r($subset);

//7) array_reverse: Reverses the order of elements in an array.
$arr = [1, 2, 3, 4, 5];
$reversed = array_reverse($arr);
print_r($reversed);

//8)array_unique: Removes duplicate values from an array.
$arr = [1, 2, 2, 3, 4, 4];
$unique = array_unique($arr);
print_r($unique);

//9)array_search: Searches an array for a given value and returns the first corresponding key.
$arr = ["a" => 1, "b" => 2, "c" => 3];
$key = array_search(2, $arr);
echo "Key: $key";

//10) array_sum: Calculates the sum of values in an array.
$arr = [1, 2, 3, 4, 5];
$sum = array_sum($arr);
echo "Sum: $sum";



///////////////////////////////////////////
//Pass by Value and Pass by Reference:////
// ///////////////////////////////////////////
// Pass by Value:
// In pass by value, a copy of the variable's value is passed to the function. Any changes made to the parameter inside the function do not affect the original variable outside the function.
// Pass by Reference:
// In pass by reference, a reference to the original variable is passed to the function. Any changes made to the parameter inside the function directly affect the original variable outside the function.


///////////////////////////////////////////////
///////////Map, Filter, Reduce:///////////////
// // ///////////////////////////////////////////
// **Map:** `array_map` transforms each element of an array by applying a specified callback function, resulting in a new array with the transformed values.

// **Filter:** `array_filter` selectively includes or excludes elements from an array based on a given condition defined by a callback function, creating a new array with the filtered elements.

// **Reduce:** `array_reduce` condenses an array to a single value by iteratively applying a callback function to its elements. This function is useful for tasks like calculating the sum or product of array elements.

