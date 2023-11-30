<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigenment 3 </title>
</head>
<body>
<?php
//1..............................

/* function calculateLCM($num1 = 12, $num2 = 18)
 {
     $max = max($num1, $num2);
     $lcm = $max;

     while (true) {
         if ($lcm % $num1 === 0 && $lcm % $num2 === 0) {
             break;
         }
         $lcm += $max;
     }
     return $lcm;
 }
 $result = calculateLCM();
 echo "LCM: " . $result;*/



// 2........................
 /*function calculateHCF($num1 = 18, $num2 = 24)
 {
     while ($num2 !== 0) {
         $temp = $num2;
         $num2 = $num1 % $num2;
         $num1 = $temp;
     }
     return $num1;
 }
$result = calculateHCF();
 echo "HCF: " . $result;8*/


//3.............................................
/*function printNonPrimeNumbers($initial = 2, $final = 100)
 {
     for ($num = $initial; $num <= $final; $num++) {
         $isPrime = true;
         for ($i = 2; $i < $num; $i++) {
             if ($num % $i === 0) {
                 $isPrime = false;
                 break;
             }
         }
         if (!$isPrime) {
             echo $num . " ";
         }
     }
 }

 printNonPrimeNumbers();*/


//4.................................................................
/* function decimalToRadix($decimal, $radix = 2)
 {
     $result = '';
    while ($decimal > 0) {
         $remainder = $decimal % $radix;
         $result = $remainder . $result;
         $decimal = intdiv($decimal, $radix);
     }
    return $result;
 }
 $decimal = 25;
 $radix = 8;
 $result = decimalToRadix($decimal, $radix);
 echo "Decimal $decimal in base $radix: " . $result;*/


//5...........................................................
/* function manipulateArray($array)
 {
     $total = 0;
     $oddTotal = 0;
     $evenTotal = 0;
  foreach ($array as $element) {
         echo $element . " ";
        $total += $element;

         if ($element % 2 === 0) {
             $evenTotal += $element;
         } else {
             $oddTotal += $element;
         }
     }
    echo "\nTotal of odd elements: " . $oddTotal;
     echo "\nTotal of even elements: " . $evenTotal;
     echo "\nTotal of all elements: " . $total;
 }
 $array = [1, 2, 3, 4, 5, 6];
 manipulateArray($array);*/



?>
</body>
</html>