<?php
// Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sortByLength($data)
{
    usort($data, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $data;
}
$data = array("choton", "chandra", "bhowmik");
$sortData = sortByLength($data);
print_r($sortData);

// Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatFromEnd($string1, $string2)
{
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $concatenatedString = $string1;

    // Start concatenating from the end of $string1
    for ($i = $len2 - 1; $i >= 0; $i--) {
        $concatenatedString .= $string2[$i];
    }

    return $concatenatedString;
};
$string1 = "hello";
$string2 = "world";
$concatenatedString = concatFromEnd($string1, $string2);
echo $concatenatedString;

// Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function removeFirstAndLast($array)
{
    $length = count($array);

    if ($length <= 2) {
        return array(); 
    } else {
        array_shift($array); 
        array_pop($array); 
        return $array;
    }
}
$array = array("apple", "banana", "orange", "pear", "grapefruit");
$trimmedArray = removeFirstAndLast($array);
print_r($trimmedArray);

// Write a PHP function to check if a string contains only letters and whitespace.
function containsOnlyLettersAndWhitespace($string)
{
    return preg_match('/^[a-zA-Z\s]+$/', $string);
}
$string1 = "This string contains only letters and whitespace";
$string2 = "This string contains a number (123)";

if (containsOnlyLettersAndWhitespace($string1)) {
    echo "String 1 contains only letters and whitespace\n";
} else {
    echo "String 1 does not contain only letters and whitespace\n";
}

if (containsOnlyLettersAndWhitespace($string2)) {
    echo "String 2 contains only letters and whitespace\n";
} else {
    echo "String 2 does not contain only letters and whitespace\n";
}
// Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargestNumber($number)
{
    
    arsort($number);

    
    $secondLargest = array_slice($number, 1, 1, true);

    return $secondLargest[array_key_first($secondLargest)];
};
$number = array(1, 2, 3, 4, 5, 6,10,16);
$secondLargest = findSecondLargestNumber($number);
echo "The second largest number in the array is: " . $secondLargest;



?>
