<?php
echo "Hello, World! <br>";

$Name ="Aseel";
$Age= 32;
$City= "Irbid";

echo "Name =$Name,Age=$Age, City=$City <br>";
//Q3:swap varibles
$a=5;
$b=10;
echo "The Value of variables befor swap: a = $a, b = $b <br>";

$a = $a + $b; 
$b = $a - $b; 
$a = $a - $b; 
echo "The result of swap: a = $a, b = $b <br>";

//Q4: The Sum of two variables
$var1=2;
$var2=5;
$var3=3;
$SumResult = $var1 + $var2;
$ProductResult=$var1 * $var2;
$ReminderResult =$var1 % $var2;
$Avgresurt=($var1 + $var2 + $var3) / 3;
echo "var1= $var1, var2= $var2 ,The Sum Result= $SumResult <br>";

//Q5: The product of two variables
echo "var1= $var1, var2= $var2 ,The product Result= $ProductResult <br>";

//Q6: The the remainder when dividing two numbers.
echo "var1= $var1, var2= $var2 ,The remainder Result= $ReminderResult <br>";

//Q7: The average of three numbers.
echo "var1= $var1, var2= $var2, var3= $var3,The average Result= $Avgresurt <br>";

//Q8: Convert Celsius to Fahrenheit.
$CelsiusDegree= 10;
$FahrenheitDegree =($CelsiusDegree * 9/5)+ 32 ;
echo "CelsiusDegree= $CelsiusDegree, The Convert From C To F Degree = $FahrenheitDegree F<br> ";

//Q9: Convert hours into minutes and seconds.
$Hours= 1;
$Minuts= $Hours * 60;
$Second =$Minuts * 60;
echo "$Hours hours = $Minuts minutes = $Second seconds <br>";

//Q10: Find the square and cube of a number.
$Num =5;
$sequare= $Num * $Num;
$cube = $Num * $Num * $Num;
echo "The Number= $Num, Sequare= $sequare, Cube=$cube <br> ";

//Q11: Check the number even Or Odd.
if($Num % 2 ==0 ){
echo "The Number is Even <br>";
}
else {
echo "The Number $Num is Odd <br>";}

//Q12: Check if a number is positive, negative, or zero.
if($Num >0){
    echo "The Number $Num is Positive <br>";
}
elseif ($Num <0) {
    echo "The Number $Num  is Negative <br>";
}
else{
    echo "The Number $Num  is Zero <br>";
}

//Q13: Find the largest of three numbers.
$x = 15;
$y = 25;
$z = 20;
$max = $x;

if ($y > $max) {
    $max = $y;
}
if ($z > $max) {
    $max = $z;
}
echo "The Maximum Number between x= $x, y= $y, z= $z is $max <br>";

//Q14: Check if a year is a leap year.
$year = 2024; 
if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
    echo "$year is a Leap Year and has 366 days.<br>";
} else {
    echo "$year is NOT a Leap Year and has 365 days.<br>";
}

//15. Check if a person is eligible to vote (age ≥ 18).
$age = 15; 
if ($age >= 18) {
    echo "The Age is $age You are eligible to vote.<br>";
} else {
    echo "The Age is $age You are NOT eligible to vote.<br>";
}

//Q16: Print grade based on marks (A, B, C, F).
$marks = 60; 
if ($marks >= 90) {
    $grade = "A";
} 
elseif ($marks >= 75 && $marks <90) {
    $grade = "B";
} 
elseif ($marks >= 50 && $marks <75) {
    $grade = "C";
} 
else {
    $grade = "F";
}
echo "Marks: $marks → Grade: $grade <br>";

//Q17: Check if a character is a vowel or consonant.
$char = 'e'; 
$char = strtolower($char);
if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
    echo "$char is a Vowel.<br>";
} 
elseif (ctype_alpha($char)) {
    echo "$char is a Consonant.<br>";
} 
else {
    echo "$char is not a letter.<br>";
}

//Q18: Use a switch statement to print the day of the week.

$day = date("l");
switch ($day) {
    case "Sunday":
        echo "Today is Sunday. <br>";
        break;
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    case "Saturday":
        echo "Today is Saturday.<br>";
        break;    
    default:
        echo "Unable to determine the day.";
}

//Q19: Check if a number is divisible by 5 and 11.
$Number =55;
if($Number%5==0 && $Number % 11 ==0)
{
    echo "The Number $Number Is Divisible by 5 and 11.<br>";
}
else{
    echo "The Number $Number Is Not Divisible by 5 and 11.<br>";
}

//Q20: Find the absolute value of a number.
$number = -15; 
$Absolute = abs($number);
echo "The Absolute value of $number is $Absolute.<br>";

//Q21: Print numbers from 1 to 10.
echo "The Numbers from (1 to 10): \n ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}
echo "<br>";
//Q22: Print even numbers between 1 and 50.
echo "The even numbers between (1 and 50): \n ";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
echo "<br>";

//Q23:23. Print odd numbers between 1 and 50.
echo "The Odd numbers between (1 and 50): \n ";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
echo "<br>";

//Q24: Print the multiplication table of a given number.
$Number =5;
echo "The multiplication table of a ($Number): \n ";
for ($i = 1; $i <= 10; $i++) {
    echo $Number * $i . "\n";
}
echo "<br>";

//Q25: Find the sum of first 100 natural numbers.
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum of first 100 natural numbers is $sum. <br>";

//Q26: Find the factorial of a number.
$number = 5; // change this to test
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i; // same as $factorial = $factorial * $i
}
echo "Factorial of $number is $factorial. <br>";

//Q27: Print the Fibonacci series up to n terms.

$n = 10; 
$a = 0;
$b = 1;
echo "Fibonacci Series up to $n terms: <br>";

for ($i = 1; $i <= $n; $i++) {
    echo $a . " ";
    $next = $a + $b;
    $a = $b;
    $b = $next;
}
echo "<br>";

//Q28: Reverse a given number.
$number = 12345;
$reverse = 0;
$temp = $number;

while ($temp > 0) {
    $digit = $temp % 10;     
    $reverse = ($reverse * 10) + $digit; 
    $temp = (int)($temp / 10);
}

echo "Original number: $number <br>";
echo "Reversed number: $reverse <br>";

//Q29: Count the number of digits in a number.
$number = 12345;
$numDigits = strlen((string)$number);
echo "Number of digits in $number is $numDigits.<br>";

//30. Find the sum of digits of a number.
$digits = str_split((string)abs($number));
$sum = array_sum($digits);
echo "The sum of digits of $number is $sum.<br>";

//Q31: Create an array of numbers and print them.
$Array = [1, 2, 3, 4, 5];
echo "The value of the array is: ";
print_r($Array);
echo "<br>";

//Q32: Find the maximum number in an array.
$numbers = [10, 25, 5, 70, 30];
$maxNumber = max($numbers);
print_r($numbers);
echo "The maximum number in the array is $maxNumber. <br>";

//Q33: Find the minimum number in an array.
$numbers = [10, 25, 5, 70, 30];
$minNumber = min($numbers);
print_r($numbers);
echo "The minimum number in the array is $minNumber. <br>";

//Q34: Find the sum of elements in an array.
$sum = 0;
print_r($numbers);
foreach ($numbers as $num) {
    $sum += $num;
}
echo "The sum of elements in the array is $sum. <br>";

//35. Find the average of array elements.
$AvgArr =$sum /count($numbers);

echo "The average of array elements is $AvgArr. <br>";


//36: Count the number of even and odd elements in an array.
$numbers = [10, 25, 5, 70, 30, 11, 8];
$evenCount = 0;
$oddCount = 0;

foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $evenCount++;
    } else {
        $oddCount++;
    }
}
print_r($numbers);
echo "<br>";
echo "Number of even elements: $evenCount <br>";
echo "Number of odd elements: $oddCount <br>";


//Q37; Sort an array in ascending order.
$numbers = [25, 10, 5, 70, 30];
echo "Array before sorting ascending: " . implode(", ", $numbers);
sort($numbers); 
echo "Array in ascending order: " . implode(", ", $numbers);
echo "<br>";

//38: Sort an array in descending order.
$numbers = [25, 10, 5, 70, 30];
echo "Array before sorting descending: " . implode(", ", $numbers);
rsort($numbers); 
echo "Array in descending order: " . implode(", ", $numbers);
echo "<br>";

//Q39. Search for an element in an array.
$numbers = [10, 25, 5, 70, 30];
 
echo "Array: " . implode(", ", $numbers);
$search = 25;
if (in_array($search, $numbers)) {
    echo "$search is found in the array. <br>";
} else {
    echo "$search is not found in the array.<br>";
}

//Q40. Remove duplicate elements from an array.
$numbers = [10, 25, 5, 70, 30, 25, 10];
$Removeduplicate = array_unique($numbers);
echo "Array: " . implode(", ", $numbers);
echo "<br>";
echo "Array after removing duplicates: " . implode(", ", $Removeduplicate);
echo "<br>";

//Q41. Find the length of a string.
$str = "Aseel";
$length = strlen($str);
echo "The length of the string '$str' is $length.<br>";

//Q42. Count the number of vowels in a string.
$str = "Aseel!";
$str = strtolower($str);
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $vowels)) {
        $count++;
    }
}
echo "The number of vowels in '$str' is $count.<br>";

//Q43. Reverse a string without using built-in functions.
$str = "Love, Pitza";
$reversed = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversed .= $str[$i]; 
}

echo "Original string: $str <br>";
echo "Reversed string: $reversed <br>";

//44. Check if a string is a palindrome.
$str = "madam";
$cleanStr = strtolower($str);
$reversed = "";
for ($i = strlen($cleanStr) - 1; $i >= 0; $i--) {
    $reversed .= $cleanStr[$i];}

if ($cleanStr === $reversed) {
    echo "$str is a palindrome.<br>";
} else {
    echo "$str is not a palindrome.<br>";
}


//Q45. Convert a string to uppercase and lowercase.
$str = "Hello, Aseel!";
$upper = strtoupper($str);
$lower = strtolower($str);

echo "Original string: $str <br>";
echo "Uppercase: $upper <br>";
echo "Lowercase: $lower<br>";


//Q46. Replace all spaces in a string with underscores.
$str = "  Hello Aseel  ";
$newStr = str_replace(" ", "_", $str);

echo "Original string: $str <br>";
echo "Modified string: $newStr <br>";


//Q47. Count the number of words in a string.
$str = "Hello Aseel, I Love PHP Programing";
$wordCount = str_word_count($str);
echo "The number of words in the string is $wordCount.<br>";

//Q48. Find the first occurrence of a word in a string.
$str = "Hello Aseel, welcome to the world of PHP.";
$word = "welcome";
$position = strpos($str, $word);

if ($position !== false) {
    echo "The word '$word' first appears at position $position.<br>";
} else {
    echo "The word '$word' was not found in the string.<br>";
}

//Q49. Concatenate two strings.
$str1 = "Hello, ";
$str2 = "PHP";

$combined = $str1 . $str2;
echo $combined;
echo "<br>";

//Q50. Check if a string contains a specific substring.
$str = "Hello, Aseel! Welcome to PHP.";
$substring = "Aseel";


if (strpos($str, $substring) !== false) {
    echo "The string contains '$substring'.<br>";
} else {
    echo "The string does not contain '$substring'.<br>";
}





















?>