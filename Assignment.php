<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> question one</h3>
    <?php
   
    //question one

    function isEven($number) {
        if ($number % 2 == 0) {
          return "$number is even.";
        } else {
          return "$number is odd.";
        }
      }
      
      $number = 14;
      
      echo isEven($number);
      
    ?>

    <h3> question two</h3>
    <?php

$i = 1;

while ($i <= 50) {
  if ($i % 5 == 0) {
    echo "$i\n";
  }
  $i++;
}

?>

<h3>question three</h3>

<?php
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<h3>question four</h3>

<?php
function findPrimeFactors($number)
{
    $factor = 2;
    echo "Prime factors of $number are: ";

    while ($number > 1) {
        if ($number % $factor === 0) {
            echo $factor . " ";
            $number /= $factor;
        } else {
            $factor++;
        }
    }
}

$number = 42;
findPrimeFactors($number);
?>

<h3>question five</h3>
<?php
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    $divisor = 2;
    $isPrime = true;

    do {
        if ($number % $divisor === 0) {
            $isPrime = false;
            break;
        }
        $divisor++;
    } while ($divisor < $number);

    return $isPrime;
}

$number = 18;

if (isPrime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is a non-prime number.";
}
?>

<h3>question six</h3>

<?php
$number = 2;

do {
    $factorial = 1;
    $n = $number;

    do {
        $factorial *= $n;
        $n--;
    } while ($n > 0);

    echo "Factorial of  $number is: $factorial\n";

    $number++;
} while ($number <= 10);
?>

<h3>question seven</h3>
<?php
$number = 200;

do {
    $isPrime = true;

    for ($divisor = 2; $divisor < $number; $divisor++) {
        if ($number % $divisor === 0) {
            $isPrime = false;
            break;
        }
    }

    if (!$isPrime) {
        echo $number . " ";
    }

    $number--;
} while ($number >= 160);
?>

<h3>question eight</h3>

<?php
$limit = 15 ; // Change this value to adjust the number of Fibonacci numbers to print

$num1 = 0;
$num2 = 1;
$count = 0;

echo "Fibonacci series: ";

while ($count < $limit) {
    echo $num1 . " ";

    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;

    $count++;
}
?>


</body>
</html>