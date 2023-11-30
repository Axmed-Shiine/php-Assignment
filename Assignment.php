<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Two </title>
</head>
<body>
<?php
 /*function decimalToBinary($number)
 {
     $binary = '';
     $integerPart = floor($number);

     while ($integerPart > 0) {
         $binary = ($integerPart % 2) . $binary;
         $integerPart = floor($integerPart / 2);
     }

     //Handle the fractional part
     if (($fractional = fmod($number, 1)) > 0) {
        $binary .= '.';

        $maxPrecision = 14; // Maximum precision for float number
         $precision = 0;

         while ($fractional > 0 && $precision < $maxPrecision) {
             $fractional *= 2;
             $bit = floor($fractional);

           if ($bit == 1) {
                 $fractional -= $bit;
                 $binary .= '1';
             } else {
                 $binary .= '0';
             }

             $precision++;
         }
     }

     return $binary;
 }

 function decimalToOctal($number)
 {
     $octal = '';
     $integerPart = floor($number);

     while ($integerPart > 0) {
         $octal = ($integerPart % 8) . $octal;
         $integerPart = floor($integerPart / 8);
     }

     // Handle the fractional part
     if (($fractional = fmod($number, 1)) > 0) {
         $octal .= '.';

         $maxPrecision = 14; // Maximum precision for float number
         $precision = 0;

         while ($fractional > 0 && $precision < $maxPrecision) {
             $fractional *= 8;
             $digit = floor($fractional);
             $octal .= $digit;
             $fractional -= $digit;

             $precision++;
         }
     }

    return $octal;
 }

 function decimalToHexadecimal($number)
 {
     $hexadecimal = '';
     $integerPart = floor($number);

     while ($integerPart > 0) {
         $remainder = $integerPart % 16;
         $hexDigit = '';

         if ($remainder < 10) {
             $hexDigit = $remainder;
         } else {
             $hexDigit = chr(ord('A') + $remainder - 10);
         }

         $hexadecimal = $hexDigit . $hexadecimal;
         $integerPart = floor($integerPart / 16);
     }

     // Handle the fractional part
     if (($fractional = fmod($number, 1)) > 0) {
         $hexadecimal .= '.';

      $maxPrecision = 14; // Maximum precision for float number
         $precision = 0;

         while ($fractional > 0 && $precision < $maxPrecision) {
             $fractional *= 16;
             $digit = floor($fractional);
             $hexDigit = '';

             if ($digit < 10) {
                 $hexDigit = $digit;
             } else {
                 $hexDigit = chr(ord('A') + $digit - 10);
             }

             $hexadecimal .= $hexDigit;
             $fractional -= $digit;

             $precision++;
         }
     }

    return $hexadecimal;
 }

 $number = 123.456; // Replace with your desired decimal float number

 $binary = decimalToBinary($number);
 $octal = decimalToOctal($number);
 $hexadecimal = decimalToHexadecimal($number);

 echo "Decimal: $number\n";
 echo "Binary: $binary\n";
 echo "Octal: $octal\n";
 echo "Hexadecimal: $hexadecimal\n";*/


///////--------------------------------------------------------------------
//2

 /*function binaryToDecimal($binary)
 {
     $decimal = 0;
     $length = strlen($binary);

     for ($i = 0; $i < $length; $i++) {
         $bit = (int)$binary[$i];
         $power = $length - $i - 1;
         $decimal += $bit * pow(2, $power);
     }

     return $decimal;
 }

 function binaryToOctal($binary)
 {
     $decimal = binaryToDecimal($binary);
     $octal = decimalToOctal($decimal);

     return $octal;
 }

 function binaryToHexadecimal($binary)
 {
     $decimal = binaryToDecimal($binary);
     $hexadecimal = decimalToHexadecimal($decimal);

     return $hexadecimal;
 }

 function decimalToOctal($decimal)
 {
     $octal = '';

     while ($decimal > 0) {
         $octal = ($decimal % 8) . $octal;
         $decimal = floor($decimal / 8);
     }

     return $octal;
 }

 function decimalToHexadecimal($decimal)
 {
     $hexadecimal = '';

     while ($decimal > 0) {
         $remainder = $decimal % 16;
         $hexDigit = '';

         if ($remainder < 10) {
             $hexDigit = $remainder;
         } else {
             $hexDigit = chr(ord('A') + $remainder - 10);
         }

       $hexadecimal = $hexDigit . $hexadecimal;
         $decimal = floor($decimal / 16);
     }

     return $hexadecimal;
 }

 $binary = '1101101'; // Replace with your desired binary number

 $decimal = binaryToDecimal($binary);
 $octal = binaryToOctal($binary);
 $hexadecimal = binaryToHexadecimal($binary);

 echo "Binary: $binary\n";
 echo "Decimal: $decimal\n";
 echo "Octal: $octal\n";
 echo "Hexadecimal: $hexadecimal\n";*/


//-------------------------------------------------------------
//3--

 //Declare and initialize the array
/* $array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

 //Print all elements of the array
 echo "Array elements: ";
 foreach ($array as $element) {
     echo $element . " ";
 }
 echo "\n";

// Calculate and print the total of all elements
$total = array_sum($array);
 echo "Total of all elements: $total\n";

// // Calculate and print the total of even elements
 $evenTotal = 0;
 foreach ($array as $element) {
     if ($element % 2 == 0) {
         $evenTotal += $element;
     }
 }
 echo "Total of even elements: $evenTotal\n";

// // Calculate and print the total of odd elements
 $oddTotal = 0;
 foreach ($array as $element) {
     if ($element % 2 != 0) {
         $oddTotal += $element;
     }
 }
 echo "Total of odd elements: $oddTotal\n";

// // Find the minimum element and its positions
 $minValue = min($array);
 $minPositions = array_keys($array, $minValue);
 echo "Minimum element: $minValue\n";
 echo "Positions of minimum element: ";
 foreach ($minPositions as $position) {
     echo $position . " ";
 }
 echo "\n";

// // Find the maximum element and its positions
 $maxValue = max($array);
 $maxPositions = array_keys($array, $maxValue);
 echo "Maximum element: $maxValue\n";
 echo "Positions of maximum element: ";
 foreach ($maxPositions as $position) {
     echo $position . " ";
 }*/
 echo "\n";
//------------------------------------------------------------------
//4----

// Declare and initialize the 2D array
 $array = array(
     array(2, -6, 8),
     array(-6, 1, 6),
     array(7, 8, -6)
 );

// // Print all elements of the array
 echo "Array elements:\n";
 foreach ($array as $row) {
     foreach ($row as $element) {
         echo $element . "\t";
     }
     echo "\n";
 }
 echo "\n";

// // Calculate and print the total of odd elements
 $oddTotal = 0;
 foreach ($array as $row) {
     foreach ($row as $element) {
         if ($element % 2 != 0) {
             $oddTotal += $element;
         }
     }
 }
 echo "Total of odd elements: $oddTotal\n";

// // Calculate and print the total of even elements
 $evenTotal = 0;
 foreach ($array as $row) {
     foreach ($row as $element) {
         if ($element % 2 == 0) {
             $evenTotal += $element;
         }
     }
 }
 echo "Total of even elements: $evenTotal\n";

// // Calculate and print the total of each row
 echo "Total of each row:\n";
 foreach ($array as $row) {
     $rowTotal = array_sum($row);
     echo $rowTotal . "\n";
 }
 echo "\n";

// // Calculate and print the total of each column
 echo "Total of each column:\n";
 $numColumns = count($array[0]);
 for ($column = 0; $column < $numColumns; $column++) {
     $columnTotal = 0;
     foreach ($array as $row) {
         $columnTotal += $row[$column];
     }
     echo $columnTotal . "\n";
 }
 echo "\n";

// // Calculate and print the total of each diagonal
 echo "Total of each diagonal:\n";
 $diagonal1Total = 0;
 $diagonal2Total = 0;
 for ($i = 0; $i < count($array); $i++) {
     $diagonal1Total += $array[$i][$i];
     $diagonal2Total += $array[$i][count($array) - $i - 1];
 }
 echo "Diagonal 1 total: $diagonal1Total\n";
 echo "Diagonal 2 total: $diagonal2Total\n";
 echo "\n";

// // Calculate and print the total of all elements
 $total = 0;
 foreach ($array as $row) {
     $total += array_sum($row);
 }
 echo "Total of all elements: $total\n";
 echo "\n";

// // Find the minimum element and its positions
 $minValue = PHP_INT_MAX;
 $minPositions = array();
 foreach ($array as $rowIndex => $row) {
     foreach ($row as $colIndex => $element) {
         if ($element < $minValue) {
             $minValue = $element;
             $minPositions = array(array($rowIndex, $colIndex));
         } elseif ($element == $minValue) {
             $minPositions[] = array($rowIndex, $colIndex);
         }
     }
 }
 echo "Minimum element: $minValue\n";
 echo "Positions of minimum element:\n";
 foreach ($minPositions as $position) {
     echo "(" . $position[0] . ", " . $position[1] . ")\n";
 }
 echo "\n";

 // Find the maximum element and its positions
 $maxValue = PHP_INT_MIN;
 $maxPositions = array();
    foreach ($array as $rowIndex => $row) {
      foreach ($row as $colIndex => $element) {
         if ($element > $maxValue) {
             $maxValue = $element;
             $maxPositions = array(array($rowIndex, $colIndex));
         } elseif ($element == $maxValue) {
             $maxPositions[] = array($rowIndex, $colIndex);
         }
     }
    }
 
 echo "Maximum element: $maxValue\n";
 echo "Positions of maximum element:\n";
foreach ($maxPositions as $position) {
    echo "(" . $position[0] . ", " . $position[1] . ")\n";
 }
?>

</body>
</html>